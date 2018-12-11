<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'dhwpfstart_sidebar_widgets' ) ) :
function dhwpfstart_sidebar_widgets() {
	register_sidebar(array(
		'id' => 'sidebar-widgets',
		'name' => __( 'Sidebar widgets', 'dhwpfstart' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'dhwpfstart' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

	register_sidebar(array(
		'id' => 'footer-widgets-1',
		'name' => __( 'Footer widgets 1', 'dhwpfstart' ),
		'description' => __( 'Drag widgets to this footer container', 'dhwpfstart' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	register_sidebar(array(
		'id' => 'footer-widgets-2',
		'name' => __( 'Footer widgets 2', 'dhwpfstart' ),
		'description' => __( 'Drag widgets to this footer container', 'dhwpfstart' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
	register_sidebar(array(
		'id' => 'footer-widgets-3',
		'name' => __( 'Footer widgets 3', 'dhwpfstart' ),
		'description' => __( 'Drag widgets to this footer container', 'dhwpfstart' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'dhwpfstart_sidebar_widgets' );
endif;
