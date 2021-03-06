/**
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
*/


.fl-node-<?php echo $id; ?> .pp-ff-content {
	background-color: <?php echo $settings->form_bg_color ? pp_hex2rgba('#' . $settings->form_bg_color, $settings->form_background_opacity / 100) : 'transparent'; ?>;
    <?php if( $settings->form_bg_image ) { ?>
	background-image: url('<?php echo $settings->form_bg_image_src; ?>');
    <?php } ?>
    <?php if( $settings->form_bg_size ) { ?>
    background-size: <?php echo $settings->form_bg_size; ?>;
    <?php } ?>
    <?php if( $settings->form_bg_repeat ) { ?>
    background-repeat: <?php echo $settings->form_bg_repeat; ?>;
    <?php } ?>
    <?php if( $settings->form_border_width >= 0 ) { ?>
    border-width: <?php echo $settings->form_border_width; ?>px;
    <?php } ?>
    <?php if( $settings->form_border_color ) { ?>
    border-color: #<?php echo $settings->form_border_color; ?>;
    <?php } ?>
    <?php if( $settings->form_border_style ) { ?>
    border-style: <?php echo $settings->form_border_style; ?>;
    <?php } ?>
    <?php if( $settings->form_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->form_border_radius; ?>px;
    <?php } ?>
    <?php if ( 'yes' == $settings->form_shadow_display ) { ?>
        -webkit-box-shadow: <?php echo $settings->form_shadow['horizontal']; ?>px <?php echo $settings->form_shadow['vertical']; ?>px <?php echo $settings->form_shadow['blur']; ?>px <?php echo $settings->form_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->form_shadow_color, $settings->form_shadow_opacity / 100 ); ?>;
        -moz-box-shadow: <?php echo $settings->form_shadow['horizontal']; ?>px <?php echo $settings->form_shadow['vertical']; ?>px <?php echo $settings->form_shadow['blur']; ?>px <?php echo $settings->form_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->form_shadow_color, $settings->form_shadow_opacity / 100 ); ?>;
        -o-box-shadow: <?php echo $settings->form_shadow['horizontal']; ?>px <?php echo $settings->form_shadow['vertical']; ?>px <?php echo $settings->form_shadow['blur']; ?>px <?php echo $settings->form_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->form_shadow_color, $settings->form_shadow_opacity / 100 ); ?>;
        box-shadow: <?php echo $settings->form_shadow['horizontal']; ?>px <?php echo $settings->form_shadow['vertical']; ?>px <?php echo $settings->form_shadow['blur']; ?>px <?php echo $settings->form_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->form_shadow_color, $settings->form_shadow_opacity / 100 ); ?>;
    <?php } ?>
    <?php if( $settings->form_padding['top'] >= 0 ) { ?>
	padding-top: <?php echo $settings->form_padding['top']; ?>px;
	<?php } ?>
	<?php if( $settings->form_padding['right'] >= 0 ) { ?>
	padding-right: <?php echo $settings->form_padding['right']; ?>px;
	<?php } ?>
	<?php if( $settings->form_padding['bottom'] >= 0 ) { ?>
	padding-bottom: <?php echo $settings->form_padding['bottom']; ?>px;
	<?php } ?>
	<?php if( $settings->form_padding['left'] >= 0 ) { ?>
	padding-left: <?php echo $settings->form_padding['left']; ?>px;
	<?php } ?>
    max-width: <?php echo $settings->form_max_width; ?>%;
}

<?php if( $settings->form_bg_image && $settings->form_bg_type == 'image' ) { ?>
.fl-node-<?php echo $id; ?> .pp-ff-content:before {
	background-color: <?php echo ( $settings->form_bg_overlay ) ? pp_hex2rgba('#' . $settings->form_bg_overlay, $settings->form_bg_overlay_opacity / 100 ) : 'transparent'; ?>;
}
<?php } ?>

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm-show-form  .frm_section_heading h3 {
    <?php if( $settings->section_field_padding['top'] >= 0 ) { ?>
	padding-top: <?php echo $settings->section_field_padding['top']; ?>px;
	<?php } ?>
	<?php if( $settings->section_field_padding['right'] >= 0 ) { ?>
	padding-right: <?php echo $settings->section_field_padding['right']; ?>px;
	<?php } ?>
	<?php if( $settings->section_field_padding['bottom'] >= 0 ) { ?>
	padding-bottom: <?php echo $settings->section_field_padding['bottom']; ?>px;
	<?php } ?>
	<?php if( $settings->section_field_padding['left'] >= 0 ) { ?>
	padding-left: <?php echo $settings->section_field_padding['left']; ?>px;
	<?php } ?>
    <?php if( $settings->section_field_margin['top'] >= 0 ) { ?>
	margin-top: <?php echo $settings->section_field_margin['top']; ?>px;
	<?php } ?>
	<?php if( $settings->section_field_margin['bottom'] >= 0 ) { ?>
	margin-bottom: <?php echo $settings->section_field_margin['bottom']; ?>px;
	<?php } ?>
    border-width: 0;
    <?php if( $settings->section_field_border_width >= 0 && $settings->section_field_border_style != 'none' ) { ?>
    <?php echo $settings->section_field_border_position; ?>-width: <?php echo $settings->section_field_border_width; ?>px;
    <?php } ?>
    <?php if( $settings->section_field_border_color ) { ?>
    border-color: #<?php echo $settings->section_field_border_color; ?>;
    <?php } ?>
    <?php if( $settings->section_field_border_style ) { ?>
    border-style: <?php echo $settings->section_field_border_style; ?>;
    <?php } ?>
    <?php if( $settings->section_field_color ) { ?>
    color: #<?php echo $settings->section_field_color; ?>;
    <?php } ?>
    <?php if( $settings->section_field_font_size['desktop'] && $settings->section_field_size == 'custom' ) { ?>
    font-size: <?php echo $settings->section_field_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->section_field_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->section_field_font_family ); ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_icon_font {
    <?php if( $settings->section_field_color ) { ?>
    color: #<?php echo $settings->section_field_color; ?>;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field {
	list-style-type: none !important;
    <?php if( $settings->input_field_margin >= 0 ) { ?>
	margin-bottom: <?php echo $settings->input_field_margin; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style h3.frm_form_title,
.fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-title {
    <?php if( $settings->title_color ) { ?>
    color: #<?php echo $settings->title_color; ?>;
    <?php } ?>
	display: <?php echo ($settings->title_field == 'false') ? 'none' : 'block'; ?>;
    <?php if( $settings->title_font_size['desktop'] && $settings->title_size == 'custom' ) { ?>
    font-size: <?php echo $settings->title_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->title_line_height['desktop'] ) { ?>
    line-height: <?php echo $settings->title_line_height['desktop']; ?>;
    <?php } ?>
    <?php if( $settings->title_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->title_font_family ); ?>
    <?php } ?>
    <?php if( $settings->title_alignment ) { ?>
    text-align: <?php echo $settings->title_alignment; ?>;
    <?php } ?>
    <?php if( $settings->title_margin['top'] >= 0 ) { ?>
	margin-top: <?php echo $settings->title_margin['top']; ?>px;
	<?php } ?>
	<?php if( $settings->title_margin['bottom'] >= 0 ) { ?>
	margin-bottom: <?php echo $settings->title_margin['bottom']; ?>px;
	<?php } ?>
    text-transform: <?php echo $settings->title_text_transform; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-title {
	display: <?php echo ($settings->form_custom_title_desc == 'yes') ? 'block' : 'none'; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style h3.frm_form_title {
	<?php if( $settings->form_custom_title_desc == 'yes' ) { ?>
	display: none;
	<?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_form_title + div.frm_description p,
.fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-description {
    <?php if( $settings->description_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->description_font_family ); ?>
    <?php } ?>
    <?php if( $settings->description_color ) { ?>
    color: #<?php echo $settings->description_color; ?>;
    <?php } ?>
	display: <?php echo ($settings->description_field == 'false') ? 'none' : 'block'; ?>;
    <?php if( $settings->description_font_size['desktop'] && $settings->description_size == 'custom' ) { ?>
    font-size: <?php echo $settings->description_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->description_line_height['desktop'] ) { ?>
    line-height: <?php echo $settings->description_line_height['desktop']; ?>;
    <?php } ?>
    <?php if( $settings->description_alignment ) { ?>
    text-align: <?php echo $settings->description_alignment; ?>;
    <?php } ?>
    <?php if( $settings->description_margin['top'] >= 0 ) { ?>
	margin-top: <?php echo $settings->description_margin['top']; ?>px;
	<?php } ?>
	<?php if( $settings->description_margin['bottom'] >= 0 ) { ?>
	margin-bottom: <?php echo $settings->description_margin['bottom']; ?>px;
	<?php } ?>
    text-transform: <?php echo $settings->description_text_transform; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content.pp-form-description {
    display: <?php echo ($settings->form_custom_title_desc == 'yes') ? 'block' : 'none'; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_form_title + div.frm_description {
	<?php if( $settings->form_custom_title_desc == 'yes' ) { ?>
	display: none;
	<?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style label.frm_primary_label {
    <?php if( $settings->form_label_color ) { ?>
	color: #<?php echo $settings->form_label_color; ?>;
    <?php } ?>
    <?php if( $settings->display_labels ) { ?>
    display: <?php echo $settings->display_labels; ?>;
    <?php } ?>
    <?php if( $settings->label_font_size['desktop'] && $settings->label_size == 'custom' ) { ?>
    font-size: <?php echo $settings->label_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->label_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->label_font_family ); ?>
    <?php } ?>
    text-transform: <?php echo $settings->label_text_transform; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field.frm_third div.frm_description,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style label,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_form_field.frm_html_container {
    <?php if( $settings->form_label_color ) { ?>
    color: #<?php echo $settings->form_label_color; ?>;
    <?php } ?>
    <?php if( $settings->label_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->label_font_family ); ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input + .frm_description,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select + .frm_description {
    <?php if( $settings->input_desc_font_size['desktop'] && $settings->input_desc_size == 'custom' ) { ?>
    font-size: <?php echo $settings->input_desc_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->input_desc_color ) { ?>
    color: #<?php echo $settings->input_desc_color; ?>;
    <?php } ?>
    <?php if( $settings->input_desc_line_height['desktop']) { ?>
    line-height: <?php echo $settings->input_desc_line_height['desktop']; ?>;
    <?php } ?>
    <?php if( $settings->label_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->label_font_family ); ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:not([type='radio']):not([type='checkbox']):not([type='submit']):not([type='button']):not([type='image']):not([type='file']),
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea {
    <?php if( $settings->input_field_text_color ) { ?>
    color: #<?php echo $settings->input_field_text_color; ?>;
    <?php } ?>
	background-color: <?php echo $settings->input_field_bg_color ? pp_hex2rgba('#' . $settings->input_field_bg_color, $settings->input_field_background_opacity / 100 ) : 'transparent'; ?>;
	border-width: 0;
	border-color: <?php echo $settings->input_field_border_color ? '#' . $settings->input_field_border_color : 'transparent'; ?>;
    <?php if( $settings->input_field_border_radius >= 0 ) { ?>
	border-radius: <?php echo $settings->input_field_border_radius; ?>px;
    -moz-border-radius: <?php echo $settings->input_field_border_radius; ?>px;
    -webkit-border-radius: <?php echo $settings->input_field_border_radius; ?>px;
    -ms-border-radius: <?php echo $settings->input_field_border_radius; ?>px;
    -o-border-radius: <?php echo $settings->input_field_border_radius; ?>px;
    <?php } ?>
    <?php if( $settings->input_field_border_width >= 0 ) { ?>
    <?php echo $settings->input_field_border_position; ?>-width: <?php echo $settings->input_field_border_width; ?>px;
    <?php } ?>
	<?php echo ($settings->input_field_width == 'true') ? 'width: 100% !important;' : ''; ?>
    <?php if( $settings->input_field_box_shadow == 'yes' ) { ?>
        box-shadow: <?php echo ($settings->input_shadow_direction == 'inset') ? $settings->input_shadow_direction : ''; ?> 0 0 10px #<?php echo $settings->input_shadow_color; ?>;
        -moz-box-shadow: <?php echo ($settings->input_shadow_direction == 'inset') ? $settings->input_shadow_direction : ''; ?> 0 0 10px #<?php echo $settings->input_shadow_color; ?>;
        -webkit-box-shadow: <?php echo ($settings->input_shadow_direction == 'inset') ? $settings->input_shadow_direction : ''; ?> 0 0 10px #<?php echo $settings->input_shadow_color; ?>;
        -ms-box-shadow: <?php echo ($settings->input_shadow_direction == 'inset') ? $settings->input_shadow_direction : ''; ?> 0 0 10px #<?php echo $settings->input_shadow_color; ?>;
        -o-box-shadow: <?php echo ($settings->input_shadow_direction == 'inset') ? $settings->input_shadow_direction : ''; ?> 0 0 10px #<?php echo $settings->input_shadow_color; ?>;
    <?php } else { ?>
		box-shadow: none;
	<?php } ?>
    <?php if( $settings->input_field_padding['top'] >= 0 ) { ?>
    padding-top: <?php echo $settings->input_field_padding['top']; ?>px;
    <?php } ?>
    <?php if( $settings->input_field_padding['bottom'] >= 0 ) { ?>
    padding-bottom: <?php echo $settings->input_field_padding['bottom']; ?>px;
    <?php } ?>
    <?php if( $settings->input_field_padding['left'] >= 0 ) { ?>
    padding-left: <?php echo $settings->input_field_padding['left']; ?>px;
    <?php } ?>
    <?php if( $settings->input_field_padding['right'] >= 0 ) { ?>
    padding-right: <?php echo $settings->input_field_padding['right']; ?>px;
    <?php } ?>
    <?php if( $settings->input_field_text_alignment ) { ?>
    text-align: <?php echo $settings->input_field_text_alignment; ?>;
    <?php } ?>
    <?php if( $settings->input_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->input_font_family ); ?>
    <?php } ?>
    <?php if( $settings->input_font_size['desktop'] && $settings->input_size == 'custom' ) { ?>
    font-size: <?php echo $settings->input_font_size['desktop']; ?>px;
    <?php } ?>
    text-transform: <?php echo $settings->input_text_transform; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_dropzone {
    background-color: <?php echo $settings->input_field_bg_color ? pp_hex2rgba('#' . $settings->input_field_bg_color, $settings->input_field_background_opacity / 100 ) : 'transparent'; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:not([type='radio']):not([type='checkbox']):not([type='submit']):not([type='button']):not([type='image']):not([type='file']),
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select {
    <?php if( $settings->input_field_height ) { ?>
    height: <?php echo $settings->input_field_height; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea {
    <?php if( $settings->input_textarea_height ) { ?>
    height: <?php echo $settings->input_textarea_height; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select {
    margin-bottom: <?php echo ( $settings->input_field_margin * 40 ) / 100 ?>px;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input::-webkit-input-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:-moz-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input::-moz-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:-ms-input-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select::-webkit-input-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select:-moz-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select::-moz-placeholder {
    <?php if( $settings->input_placeholder_color ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select:-ms-input-placeholder {
    <?php if( $settings->input_placeholder_color ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea::-webkit-input-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea:-moz-placeholder {
    <?php if( $settings->input_placeholder_color ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea::-moz-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea:-ms-input-placeholder {
    <?php if( $settings->input_placeholder_color && $settings->input_placeholder_display == 'block' ) { ?>
    color: #<?php echo $settings->input_placeholder_color; ?>;
    <?php } else { ?>
    color: transparent;
	opacity: 0;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:not([type='radio']):not([type='checkbox']):not([type='submit']):not([type='button']):not([type='image']):not([type='file']):focus,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select:focus,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea:focus {
    border-color: <?php echo $settings->input_field_focus_color ? '#' . $settings->input_field_focus_color : 'transparent'; ?>;
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_submit {
    <?php if( $settings->button_alignment ) { ?>
    text-align: <?php echo $settings->button_alignment; ?>;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=submit],
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=button],
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=reset],
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_submit button {
    <?php if( $settings->button_text_color['primary'] ) { ?>
	color: #<?php echo $settings->button_text_color['primary']; ?>;
    <?php } ?>
	background: <?php echo $settings->button_bg_color['primary'] ? pp_hex2rgba('#' . $settings->button_bg_color['primary'], $settings->button_background_opacity / 100 ) : 'transparent'; ?>;
    <?php if( $settings->button_border_width || $settings->button_border_color ) { ?>
	border: <?php echo $settings->button_border_width; ?>px solid <?php echo $settings->button_border_color ? '#' . $settings->button_border_color : 'transparent'; ?>;
    <?php } ?>
    <?php if( $settings->button_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->button_border_radius; ?>px;
    -moz-border-radius: <?php echo $settings->button_border_radius; ?>px;
    -webkit-border-radius: <?php echo $settings->button_border_radius; ?>px;
    -ms-border-radius: <?php echo $settings->button_border_radius; ?>px;
    -o-border-radius: <?php echo $settings->button_border_radius; ?>px;
    <?php } ?>
    <?php if( $settings->button_padding['top'] >= 0 ) { ?>
    padding-top: <?php echo $settings->button_padding['top']; ?>px;
    <?php } ?>
    <?php if( $settings->button_padding['bottom'] >= 0 ) { ?>
    padding-bottom: <?php echo $settings->button_padding['bottom']; ?>px;
    <?php } ?>
    <?php if( $settings->button_padding['left'] >= 0 ) { ?>
    padding-left: <?php echo $settings->button_padding['left']; ?>px;
    <?php } ?>
    <?php if( $settings->button_padding['right'] >= 0 ) { ?>
    padding-right: <?php echo $settings->button_padding['right']; ?>px;
    <?php } ?>
    <?php if( $settings->button_font_family['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->button_font_family ); ?>
    <?php } ?>
    <?php if( $settings->button_font_size['desktop'] && $settings->button_size == 'custom' ) { ?>
    font-size: <?php echo $settings->button_font_size['desktop']; ?>px;
    <?php } ?>
    text-transform: <?php echo $settings->button_text_transform; ?>;
    <?php if( $settings->button_width == 'true' ) { ?>width: 100%; <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=submit]:hover,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=button]:hover,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=reset]:hover,
.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_submit button:hover {
    <?php if( $settings->button_text_color['secondary'] ) { ?>
	color: #<?php echo $settings->button_text_color['secondary']; ?>;
    <?php } ?>
	background: <?php echo $settings->button_bg_color['secondary'] ? '#' . $settings->button_bg_color['secondary'] : 'transparent'; ?>;
    <?php if( $settings->button_border_width || $settings->button_border_color ) { ?>
	border: <?php echo $settings->button_border_width; ?>px solid <?php echo $settings->button_border_color ? '#' . $settings->button_border_color : 'transparent'; ?>;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_error_style {
    <?php if( $settings->validation_error_font_size['desktop'] && $settings->validation_error_size == 'custom' ) { ?>
	font-size: <?php echo $settings->validation_error_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->validation_error ) { ?>
	display: <?php echo $settings->validation_error; ?> !important;
    <?php } ?>
    <?php if( $settings->validation_error_color ) { ?>
	color: #<?php echo $settings->validation_error_color; ?>;
    <?php } ?>
	border-color: <?php echo $settings->validation_error_border_color ? '#' . $settings->validation_error_border_color : 'transparent'; ?>;
    background-color: <?php echo $settings->validation_error_bg_color ? '#' . $settings->validation_error_bg_color : 'transparent'; ?>
}

.fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_error {
    <?php if( $settings->validation_message ) { ?>
	display: <?php echo $settings->validation_message; ?>;
    <?php } ?>
    <?php if( $settings->validation_message_color ) { ?>
	color: #<?php echo $settings->validation_message_color; ?>;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_message {
    <?php if( $settings->success_message_font_size['desktop'] && $settings->success_message_size == 'custom' ) { ?>
	font-size: <?php echo $settings->success_message_font_size['desktop']; ?>px;
    <?php } ?>
    <?php if( $settings->success_message_color ) { ?>
	color: #<?php echo $settings->success_message_color; ?>;
    <?php } ?>
	border-color: <?php echo $settings->success_message_border_color ? '#' . $settings->success_message_border_color : 'transparent'; ?>;
    background-color: <?php echo $settings->success_message_bg_color ? '#' . $settings->success_message_bg_color : 'transparent'; ?>
}

@media only screen and (max-width: 768px) {
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style h3.frm_form_title,
    .fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-title {
        <?php if( $settings->title_font_size['tablet'] && $settings->title_size == 'custom' ) { ?>
        font-size: <?php echo $settings->title_font_size['tablet']; ?>px;
        <?php } ?>
        <?php if( $settings->title_line_height['tablet'] ) { ?>
        line-height: <?php echo $settings->title_line_height['tablet']; ?>;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_form_title + div.frm_description p,
    .fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-description {
        <?php if( $settings->description_font_size['tablet'] && $settings->description_size == 'custom' ) { ?>
        font-size: <?php echo $settings->description_font_size['tablet']; ?>px;
        <?php } ?>
        <?php if( $settings->description_line_height['tablet'] ) { ?>
        line-height: <?php echo $settings->description_line_height['tablet']; ?>;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style label.frm_primary_label {
        <?php if( $settings->label_font_size['tablet'] && $settings->label_size == 'custom' ) { ?>
        font-size: <?php echo $settings->label_font_size['tablet']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:not([type='radio']):not([type='checkbox']):not([type='submit']):not([type='button']):not([type='image']):not([type='file']),
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select,
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea {
        <?php if( $settings->input_font_size['tablet'] && $settings->input_size == 'custom' ) { ?>
        font-size: <?php echo $settings->input_font_size['tablet']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input + .frm_description {
        <?php if( $settings->input_desc_font_size['tablet'] && $settings->input_desc_size == 'custom' ) { ?>
        font-size: <?php echo $settings->input_desc_font_size['tablet']; ?>px;
        <?php } ?>
        <?php if( $settings->input_desc_line_height['tablet']) { ?>
        line-height: <?php echo $settings->input_desc_line_height['tablet']; ?>;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=submit],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=button],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=reset],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_submit button {
        <?php if( $settings->button_font_size['tablet'] && $settings->button_size == 'custom' ) { ?>
        font-size: <?php echo $settings->button_font_size['tablet']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_error_style {
        <?php if( $settings->validation_error_font_size['tablet'] && $settings->validation_error_size == 'custom' ) { ?>
    	font-size: <?php echo $settings->validation_error_font_size['tablet']; ?>px;
        <?php } ?>
    }

    .fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_message {
        <?php if( $settings->success_message_font_size['tablet'] && $settings->success_message_size == 'custom' ) { ?>
    	font-size: <?php echo $settings->success_message_font_size['tablet']; ?>px;
        <?php } ?>
    }
}

@media only screen and (max-width: 480px) {
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style h3.frm_form_title,
    .fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-title {
        <?php if( $settings->title_font_size['mobile'] && $settings->title_size == 'custom' ) { ?>
        font-size: <?php echo $settings->title_font_size['mobile']; ?>px;
        <?php } ?>
        <?php if( $settings->title_line_height['mobile'] ) { ?>
        line-height: <?php echo $settings->title_line_height['mobile']; ?>;
        <?php } ?>
    }

    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_form_title + div.frm_description p,
    .fl-node-<?php echo $id; ?> .pp-ff-content .pp-form-description {
        <?php if( $settings->description_font_size['mobile'] && $settings->description_size == 'custom' ) { ?>
        font-size: <?php echo $settings->description_font_size['mobile']; ?>px;
        <?php } ?>
        <?php if( $settings->description_line_height['mobile'] ) { ?>
        line-height: <?php echo $settings->description_line_height['mobile']; ?>;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style label.frm_primary_label {
        <?php if( $settings->label_font_size['mobile'] && $settings->label_size == 'custom' ) { ?>
        font-size: <?php echo $settings->label_font_size['mobile']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input:not([type='radio']):not([type='checkbox']):not([type='submit']):not([type='button']):not([type='image']):not([type='file']),
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field select,
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field textarea {
        <?php if( $settings->input_font_size['mobile'] && $settings->input_size == 'custom' ) { ?>
        font-size: <?php echo $settings->input_font_size['mobile']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .form-field input + .frm_description {
        <?php if( $settings->input_desc_font_size['mobile'] && $settings->input_desc_size == 'custom' ) { ?>
        font-size: <?php echo $settings->input_desc_font_size['mobile']; ?>px;
        <?php } ?>
        <?php if( $settings->input_desc_line_height['mobile']) { ?>
        line-height: <?php echo $settings->input_desc_line_height['mobile']; ?>;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=submit],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=button],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style input[type=reset],
	.fl-node-<?php echo $id; ?> .pp-ff-content .frm_style_formidable-style.with_frm_style .frm_submit button {
        <?php if( $settings->button_font_size['mobile'] && $settings->button_size == 'custom' ) { ?>
        font-size: <?php echo $settings->button_font_size['mobile']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_error_style {
        <?php if( $settings->validation_error_font_size['mobile'] && $settings->validation_error_size == 'custom' ) { ?>
    	font-size: <?php echo $settings->validation_error_font_size['mobile']; ?>px;
        <?php } ?>
    }
    .fl-node-<?php echo $id; ?> .frm_style_formidable-style.with_frm_style .frm_message {
        <?php if( $settings->success_message_font_size['mobile'] && $settings->success_message_size == 'custom' ) { ?>
    	font-size: <?php echo $settings->success_message_font_size['mobile']; ?>px;
        <?php } ?>
    }
}
