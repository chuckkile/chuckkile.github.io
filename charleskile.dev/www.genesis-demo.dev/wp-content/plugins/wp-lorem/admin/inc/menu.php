<?php
    $pageSelected = sanitize_text_field( $_GET['page'] );
    $pageSelected_menu = array( 'wp_lorem' => '' , 'wplorem_nn_insert_new' => '' , 'wplorem_nn_delete_posts' => '' );
    if( $pageSelected == 'wp_lorem' )
        $pageSelected_menu['wp_lorem'] = 'current';
    if( $pageSelected == 'wplorem_nn_insert_new' )
        $pageSelected_menu['wplorem_nn_insert_new'] = 'current';
    if( $pageSelected == 'wplorem_nn_delete_posts' )
        $pageSelected_menu['wplorem_nn_delete_posts'] = 'current';
?>
<ul>
    <li class="<?php echo $pageSelected_menu['wp_lorem'];?>">
        <a href="?page=wp_lorem"><?php _e('WP Lorem' , 'wp-lorem'); ?></a>
    </li>
    <li class="<?php echo $pageSelected_menu['wplorem_nn_insert_new'];?>" >
        <a href="?page=wplorem_nn_insert_new"><?php _e('Insert New Posts' , 'wp-lorem'); ?></a>
    </li>
    <li class="<?php echo $pageSelected_menu['wplorem_nn_delete_posts'];?>">
        <a href="?page=wplorem_nn_delete_posts"><?php _e('Delete Lorem Posts' , 'wp-lorem'); ?></a>
    </li>
</ul>
