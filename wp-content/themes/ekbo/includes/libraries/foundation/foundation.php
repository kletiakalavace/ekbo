<?php
/**
 * Foundation PHP template
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

// Pagination.
if ( ! function_exists( 'dhwpfstart_pagination' ) ) :
	function dhwpfstart_pagination() {
		global $wp_query;

		$big = 999999999; // This needs to be an unlikely integer

		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => true,
			'prev_text' => __( '&laquo;', 'dhwpfstart' ),
			'next_text' => __( '&raquo;', 'dhwpfstart' ),
			'type' => 'list',
		) );

		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination text-center' role='navigation' aria-label='Pagination'>", $paginate_links );
		$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
		$paginate_links = str_replace( '</span>', '</a>', $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'>", $paginate_links );
		$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
		$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );

		// Display the pagination if more than one page is found.
		if ( $paginate_links ) {
			echo $paginate_links;
		}
	}
endif;

// Add Foundation 'is-active' class for the current menu item.
if ( ! function_exists( 'dhwpfstart_active_nav_class' ) ) :
function dhwpfstart_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'is-active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'dhwpfstart_active_nav_class', 10, 2 );
endif;

/**
 * Use the is-active class of ZURB Foundation on wp_list_pages output.
 * From required+ Foundation http://themes.required.ch.
 */
if ( ! function_exists( 'dhwpfstart_active_list_pages_class' ) ) :
function dhwpfstart_active_list_pages_class( $input ) {

	$pattern = '/current_page_item/';
	$replace = 'current_page_item is-active';

	$output = preg_replace( $pattern, $replace, $input );

	return $output;
}
add_filter( 'wp_list_pages', 'dhwpfstart_active_list_pages_class', 10, 2 );
endif;

/**
 * Get mobile menu ID
 */

if ( ! function_exists( 'dhwpfstart_mobile_menu_id' ) ) :
function dhwpfstart_mobile_menu_id() {
	if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) {
		echo 'off-canvas-menu';
	} else {
		echo 'mobile-menu';
	}
}
endif;

/**
 * Get title bar responsive toggle attribute
 */

if ( ! function_exists( 'dhwpfstart_title_bar_responsive_toggle' ) ) :
function dhwpfstart_title_bar_responsive_toggle() {
	if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) {
		echo 'data-responsive-toggle="mobile-menu"';
	}
}
endif;
