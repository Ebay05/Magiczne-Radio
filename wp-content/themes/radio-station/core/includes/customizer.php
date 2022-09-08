<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'radio_station_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'radio-station' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'radio-station' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'radio-station' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'radio_station_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'radio-station' ),
	) );

	Kirki::add_section( 'radio_station_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'radio-station' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_all_headings_typography',
		'section'     => 'radio_station_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'radio_station_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'radio-station' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'radio-station' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'radio-station' ),
		'section'     => 'radio_station_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_body_content_typography',
		'section'     => 'radio_station_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'radio_station_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'radio-station' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'radio-station' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'radio-station' ),
		'section'     => 'radio_station_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'radio_station_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'radio-station' ),
	) );

	// Scroll Top

	Kirki::add_section( 'radio_station_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'radio-station' ),
	    'description'    => esc_html__( 'Scroll To Top', 'radio-station' ),
	    'panel'          => 'radio_station_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'radio_station_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'radio-station' ),
		'section'     => 'radio_station_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'radio_station_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'radio-station' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'radio-station' ),
	    'panel'          => 'radio_station_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_post_heading',
		'section'     => 'radio_station_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'radio-station' ),
		'section'     => 'radio_station_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'radio-station' ),
		'section'     => 'radio_station_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'radio_station_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'radio-station' ),
		'section'     => 'radio_station_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'radio_station_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'radio-station' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'radio-station' ),
	    'panel'          => 'radio_station_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_search',
		'section'     => 'radio_station_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_search_box_enable',
		'section'     => 'radio_station_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_header_enable_google_translator',
		'section'     => 'radio_station_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translator Box', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_header_google_translator',
		'section'     => 'radio_station_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'radio_station_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'radio-station' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'radio-station' ),
        'panel'          => 'radio_station_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_heading',
		'section'     => 'radio_station_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'radio-station' ),
		'section'     => 'radio_station_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'radio-station' ),
		'section'     => 'radio_station_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'radio-station' ),
		'section'     => 'radio_station_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_slider_heading',
		'section'     => 'radio_station_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'radio_station_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'radio-station' ),
		'section'     => 'radio_station_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'radio_station_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'radio-station' ),
		'section'     => 'radio_station_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'radio-station' ),
		'priority'    => 10,
		'choices'     => radio_station_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '1st Heading', 'radio-station' ),
		'settings' => 'radio_station_slider_first_heading',
		'section'  => 'radio_station_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_socail_link',
		'section'     => 'radio_station_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'radio_station_blog_slide_section',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'radio-station' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'radio-station' ),
		'settings'     => 'radio_station_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'radio-station' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'radio-station' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'radio-station' ),
				'description' => esc_html__( 'Add the social icon url here.', 'radio-station' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	//RADIO CATEGORY SECTION

	Kirki::add_section( 'radio_station_radio_category_section', array(
	    'title'          => esc_html__( 'Radio Category Settings', 'radio-station' ),
	    'description'    => esc_html__( 'Here you can add different type of radio category.', 'radio-station' ),
	    'panel'          => 'radio_station_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_enable_heading',
		'section'     => 'radio_station_radio_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Radio Category ',  'radio-station' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_radio_category_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'radio-station' ),
		'section'     => 'radio_station_radio_category_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'radio-station' ),
			'off' => esc_html__( 'Disable',  'radio-station' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_radio_category_heading',
		'section'     => 'radio_station_radio_category_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Radio Category', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '1st Heading', 'radio-station' ),
		'settings' => 'radio_station_radio_category_first_heading',
		'section'  => 'radio_station_radio_category_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( '2nd Heading', 'radio-station' ),
		'settings' => 'radio_station_radio_category_second_heading',
		'section'  => 'radio_station_radio_category_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'radio_station_radio_category_number',
		'label'       => esc_html__( 'Number of radio category to show', 'radio-station' ),
		'section'     => 'radio_station_radio_category_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'radio_station_radio_category',
		'label'       => esc_html__( 'Select the category to show post ( Image Dimension 500 x 500 )', 'radio-station' ),
		'section'     => 'radio_station_radio_category_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'radio-station' ),
		'priority'    => 10,
		'choices'     => radio_station_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'radio_station_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'radio-station' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'radio-station' ),
        'panel'          => 'radio_station_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_footer_text_heading',
		'section'     => 'radio_station_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'radio_station_footer_text',
		'section'  => 'radio_station_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'radio_station_footer_enable_heading',
		'section'     => 'radio_station_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'radio-station' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'radio_station_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'radio-station' ),
		'section'     => 'radio_station_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'radio-station' ),
			'off' => esc_html__( 'Disable', 'radio-station' ),
		],
	] );
}
