<?php
/*
  Plugin Name: WP Lorem
  Plugin URI: http://www.nivnoiman.com
  Description: WP Lorem , import data to your Wordpress.
  Author: Niv Noiman
  Version: 0.1.4
  Text Domain: wp-lorem
  Domain Path: /languages
  Author URI: http://www.nivnoiman.com
*/
/*********************************************
*   General
**********************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
function wplorem_nn_admin() {
    include("admin/pages/wplorem-admin.php");
}
function wplorem_nn_delete_posts() {
    include("admin/pages/wplorem-delete_posts.php");
}
function wplorem_nn_insert_new() {
    include("admin/pages/wplorem-insert_new.php");
}
function wplorem_nn_plugin_admin_actions() {
    add_menu_page(
        __( 'WP Lorem', 'wp-lorem' ),
        __( 'WP Lorem', 'wp-lorem' ),
        'manage_options',
        'wp_lorem',
        'wplorem_nn_admin',
        'dashicons-format-aside'
    );
    add_submenu_page(
        'wp_lorem',
        __( 'Insert New', 'wp-lorem' ),
        __( 'Insert New', 'wp-lorem' ),
        'manage_options',
        'wplorem_nn_insert_new',
        'wplorem_nn_insert_new'
    );
    add_submenu_page(
        'wp_lorem',
        __( 'Delete Posts', 'wp-lorem' ),
        __( 'Delete Posts', 'wp-lorem' ),
        'manage_options',
        'wplorem_nn_delete_posts',
        'wplorem_nn_delete_posts'
    );
}
add_action('admin_menu', 'wplorem_nn_plugin_admin_actions');
/*********************************************
*   Load WP Lorem TextDomain
**********************************************/
function wplorem_nn_load_plugin_textdomain() {
	$domain = 'wp-lorem';
	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
	if ( $loaded = load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' ) ) {
		return $loaded;
	} else {
		load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	}
}
add_action( 'init', 'wplorem_nn_load_plugin_textdomain' );
/*********************************************
*   Register admin styles
**********************************************/
function wplorem_nn_plugin_admin_style() {
    if ( wp_script_is( 'wp-lorem' ) )
        return;
    else{
        wp_register_style( 'wp-lorem', plugin_dir_url( __FILE__ ).'admin/css/wp-lorem.css' );
        wp_enqueue_style( 'wp-lorem' );
    }
    if( is_rtl() ){
        if ( wp_script_is( 'wp-lorem-rtl' ) )
            return;
        else{
            wp_register_style( 'wp-lorem-rtl', plugin_dir_url( __FILE__ ).'admin/css/wp-lorem_rtl.css' );
            wp_enqueue_style( 'wp-lorem-rtl' );
        }
    }
}
add_action('admin_head', 'wplorem_nn_plugin_admin_style');
/*********************************************
*   Register admin scripts
**********************************************/
function wplorem_nn_plugin_admin_scripts() {
    if ( wp_script_is( 'wplorem-admin-ajax_script' ) )
        return;
    else{
        wp_enqueue_script( 'wplorem-admin-ajax_script', plugin_dir_url( __FILE__ ) . '/admin/js/ajax_function.js', array('jquery') );
        wp_localize_script( 'wplorem-admin-ajax_script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
    }
    if ( wp_script_is( 'wplorem-admin_scripts' ) )
        return;
    else
        wp_enqueue_script( 'wplorem-admin_scripts', plugin_dir_url( __FILE__ ) . 'admin/js/admin_scripts.js' );

    wp_localize_script( 'wplorem-admin_scripts', 'wplorem_core_language', wpl_get_core_lang() );
}
add_action('admin_enqueue_scripts', 'wplorem_nn_plugin_admin_scripts');
if( is_admin() ) {
    include_once( dirname(__FILE__)  . '/admin/wplorem_functions.php');
    include_once( dirname(__FILE__)  . '/admin/wplorem_ajax-functions.php');
}
/*********************************************
*   Register Custom Status
**********************************************/
if ( ! function_exists('wplorem_nn_init_postStatus') ) {
function wplorem_nn_init_postStatus() {
	$args = array(
		'label'                     => _x( 'Lorem Post', 'Status General Name', 'wp-lorem' ),
		'label_count'               => _n_noop( 'Lorem Post (%s)',  'Lorem Posts (%s)', 'wp-lorem' ),
		'public'                    => true,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'exclude_from_search'       => false,
	);
	register_post_status( 'lorem_post', $args );
}
add_action( 'init', 'wplorem_nn_init_postStatus', 0 );
}
if ( ! function_exists('wplorem_nn_add_to_post_status_dropdown') ) {
function wplorem_nn_add_to_post_status_dropdown(){
    ?>
    <script>
    jQuery(document).ready(function($){
        jQuery("select#post_status").append("<option value=\"lorem_post\" <?php selected('lorem_post', $post->post_status); ?>><?php _e( 'Lorem Post', 'wp-lorem' ); ?></option>");
    });
    </script>
    <?php
}
add_action( 'post_submitbox_misc_actions', 'wplorem_nn_add_to_post_status_dropdown');
}
if ( ! function_exists('wplorem_nn_add_status_label') ) {
function wplorem_nn_add_status_label( $statuses ) {
	global $post;
	if( get_query_var( 'post_status' ) != 'lorem_post' ){
		if( $post->post_status == 'lorem_post' ){
			return array(__( 'Lorem Post', 'wp-lorem' ));
		}
	}
	return $statuses; // returning the array with default statuses
}
}
add_filter( 'display_post_states', 'wplorem_nn_add_status_label' );
/*********************************************
*   MCE Button
**********************************************/
function register_button( $buttons ) {
   array_push( $buttons, "|", "nnWpLorem" );
   return $buttons;
}
function add_button( $plugin_array ) {
   $plugin_array['nnWpLorem'] = plugin_dir_url( __FILE__ ) . '/admin/js/add_button.js';
   return $plugin_array;
}
function my_recent_posts_button() {
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
      return;
   }
   if ( get_user_option('rich_editing') == 'true' ) {
      add_filter( 'mce_external_plugins', 'add_button' );
      add_filter( 'mce_buttons', 'register_button' );
   }
}
add_action('init', 'my_recent_posts_button');

/**
 * Localize Script
 */
function wpl_my_admin_head() {
    $plugin_url = plugins_url( '/', __FILE__ );

    if( !get_option('wplorem_nn_core_language') )
        $lang = 'en';
    else
        $lang = get_option('wplorem_nn_core_language');
    ?>
    <!-- TinyMCE Shortcode Plugin -->
    <script type='text/javascript'>
    var wplorem_core_language = '<?php echo $lang; ?>';
    </script>
    <!-- TinyMCE Shortcode Plugin -->
    <?php
}
add_action( "admin_head", 'wpl_my_admin_head' );
