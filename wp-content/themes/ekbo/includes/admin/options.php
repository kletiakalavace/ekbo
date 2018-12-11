<?php

if ( ! function_exists( 'dhwpfstart_register_theme_customizer' ) ) :
function dhwpfstart_register_theme_customizer( $wp_customize ) {

	// Create custom panels
	$wp_customize->add_panel( 'mobile_menu_settings', array(
		'priority'       => 1000,
		'theme_supports' => '',
		'title'          => __( 'Mobile Menu Settings', 'dhwpfstart' ),
		'description'    => __( 'Controls the mobile menu', 'dhwpfstart' ),
	) );

	// Create custom field for mobile navigation layout
	$wp_customize->add_section( 'mobile_menu_layout' , array(
		'title'    => __('Mobile Navigation Layout','dhwpfstart'),
		'panel'    => 'mobile_menu_settings',
		'priority' => 1000,
	));

	// Set default navigation layout
	$wp_customize->add_setting(
		'wpt_mobile_menu_layout',
		array(
			'default' => __( 'topbar', 'dhwpfstart' ),
		)
	);

	// Add options for navigation layout
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mobile_menu_layout',
			array(
				'type'     => 'radio',
				'section'  => 'mobile_menu_layout',
				'settings' => 'wpt_mobile_menu_layout',
				'choices'  => array(
					'topbar'    => 'Topbar',
					'offcanvas' => 'Offcanvas',
				),
			)
		)
	);

	// Theme Setting
	$wp_customize->add_panel( 'ekbo_theme_settings', array(
		'priority'       => 1001,
		'theme_supports' => '',
		'title'          => __( 'Theme Settings', 'dhwpfstart' ),
		'description'    => __( 'All theme controlls', 'dhwpfstart' ),
	) );

	// Theme Layout
	$wp_customize->add_section( 'ekbo_theme_layout_header' , array(
		'title'    => __('Theme Header','dhwpfstart'),
		'panel'    => 'ekbo_theme_settings',
		'priority' => 1001,
	));

	// Logo
	$wp_customize->add_setting( 'theme_logo' );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( 
			$wp_customize, 'theme_logo', 
			array(
			    'label'    => __( 'Logo', 'dhwpfstart' ),
			    'section'  => 'ekbo_theme_layout_header',
			    'settings' => 'theme_logo',
			) 
		) 
	);
	// Header image center
	$wp_customize->add_setting( 'theme_logo_center' );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control( 
			$wp_customize, 'theme_logo_center', 
			array(
			    'label'    => __( 'Header Image Center', 'dhwpfstart' ),
			    'section'  => 'ekbo_theme_layout_header',
			    'settings' => 'theme_logo_center',
			) 
		) 
	);

	
	// Facebook
	$wp_customize->add_setting( 'theme_social_link_facebook');
	$wp_customize->add_control( 'theme_social_link_facebook', array(
	    'type' => 'url',
	    'section' => 'ekbo_theme_layout_header',
	    'label' => __( 'Facebook Link', 'dhwpfstart' ),
	    'description' => '',
	) );
	// Twitter
	$wp_customize->add_setting( 'theme_social_link_twitter' );
	$wp_customize->add_control( 'theme_social_link_twitter', array(
	    'type' => 'url',
	    'section' => 'ekbo_theme_layout_header',
	    'label' => __( 'Twitter Link', 'dhwpfstart' ),
	    'description' => '',
	) );
	// Instagram
	$wp_customize->add_setting( 'theme_social_link_instagram' );
	$wp_customize->add_control( 'theme_social_link_instagram', array(
	    'type' => 'url',
	    'section' => 'ekbo_theme_layout_header',
	    'label' => __( 'Instagram Link', 'dhwpfstart' ),
	    'description' => '',
	) );

	// Theme Body
	$wp_customize->add_section( 'ekbo_theme_layout_content' , array(
		'title'    => __('Theme Body','dhwpfstart'),
		'panel'    => 'ekbo_theme_settings',
		'priority' => 1001,
	));

	$pages = dhwpfstart_getPages();
	
	$wp_customize->add_setting('page_content_1');
	$wp_customize->add_control('page_content_1',array(
		'type' => 'select',
		'label' => 'Page First Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );
	$wp_customize->add_setting('page_content_2');
	$wp_customize->add_control('page_content_2',array(
		'type' => 'select',
		'label' => 'Page Second Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );
	$wp_customize->add_setting('page_content_3');
	$wp_customize->add_control('page_content_3',array(
		'type' => 'select',
		'label' => 'Page Third Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );
	$wp_customize->add_setting('page_content_4');
	$wp_customize->add_control('page_content_4',array(
		'type' => 'select',
		'label' => 'Page Fourth Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );
	$wp_customize->add_setting('page_content_5');
	$wp_customize->add_control('page_content_5',array(
		'type' => 'select',
		'label' => 'Page Fifth Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );
	$wp_customize->add_setting('page_content_6');
	$wp_customize->add_control('page_content_6',array(
		'type' => 'select',
		'label' => 'Page Sixth Block:',
		'section' => 'ekbo_theme_layout_content',
		'choices' => $pages,
	) );


	// Theme Footer
	$wp_customize->add_section( 'ekbo_theme_layout_footer' , array(
		'title'    => __('Theme Footer','dhwpfstart'),
		'panel'    => 'ekbo_theme_settings',
		'priority' => 1001,
	));

	// Copyright
	$wp_customize->add_setting('copyright');
	$wp_customize->add_control('copyright',array(
		'type' => 'text',
		'label' => 'Copyright:',
		'section' => 'ekbo_theme_layout_footer'
	) );

}

add_action( 'customize_register', 'dhwpfstart_register_theme_customizer' );

// Add class to body to help w/ CSS
add_filter( 'body_class', 'dhwpfstart_mobile_nav_class' );
function dhwpfstart_mobile_nav_class( $classes ) {
	if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) :
		$classes[] = 'offcanvas';
	elseif ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) :
		$classes[] = 'topbar';
	endif;
	return $classes;
}
endif;
