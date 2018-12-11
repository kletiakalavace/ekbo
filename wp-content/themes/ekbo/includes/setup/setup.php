<?php

if ( ! function_exists( 'dhwpfstart_theme_support' ) ) :

	function dhwpfstart_theme_support() {
		
		load_theme_textdomain( 'dhwpfstart', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );

	    // Register Custom Menus
	    register_nav_menus( array(
			'top-bar-r'  => esc_html__( 'Right Top Bar', 'dhwpfstart' ),
			'mobile-nav' => esc_html__( 'Mobile', 'dhwpfstart' ),
			'footer-nav' => esc_html__( 'Footer', 'dhwpfstart' ),
		));

	}
	add_action( 'after_setup_theme', 'dhwpfstart_theme_support' );

endif;

if ( ! function_exists( 'dhwpfstart_scripts' ) ) :
	
	function dhwpfstart_scripts() {

		// CSS
		wp_enqueue_style( 'libraries-stylesheet', get_template_directory_uri() . '/assets/css/app.css', array(), '2.10.3', 'all' );
		wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css/main.css', array(), '2.10.3', 'all' );
		wp_enqueue_style( 'vikariat-stylesheet', get_template_directory_uri() . '/assets/css/vikariat.css', array(), '2.10.3', 'all' );

		//JS
		wp_enqueue_script( 'libraries-js', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '2.10.3', true );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '2.10.3', true );

	}

	add_action( 'wp_enqueue_scripts', 'dhwpfstart_scripts' );

endif;