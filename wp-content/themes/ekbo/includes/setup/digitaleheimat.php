<?php

if ( ! function_exists( 'dh_digitaleheimat_setup' ) ) :
	
	function dh_digitaleheimat_setup() {
		
		if ( is_user_logged_in() ) {

			function remove_admin_bar_links() {
				global $wp_admin_bar;
				$wp_admin_bar->remove_menu('wp-logo');
				// $wp_admin_bar->remove_menu('updates');
			}
			add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

			function add_admin_bar_links() {
				global $wp_admin_bar;
				$wp_admin_bar->add_menu(array(
					'id' => 'nm_root',
					'title' => "<img src='https://www.novamatrix.de/nm-wp-branding-images/wp-admin-bar-logo.png' />",
					'href' => "https://www.digitaleheimat.de"
					)
				);
			}
			add_action('admin_bar_menu', 'add_admin_bar_links');

			//Wodpress Dashboard Widgets entfernen
			function nm_dashboard_widgets() {
				
				global $wp_meta_boxes;
				
				// Widget Auf einen Blick entfernen
				// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
				// Widget Letzte Kommentare entfernen
				// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
				// Widget Eingehende Links entfernen
				// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
				// Widget Plugins entfernen

				unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
				// Widget Quickpress entfernen
				unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
				// Widget Aktuelle Entwürfe entfernen
				unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
				// Widget WordPress-Blog entfernen
				unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
				// Widget Weitere WordPress-News entfernen
				unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

				// Widget Dein Browser ist veraltet!
				// unset($wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']);

				// Widget digitaleheimat-Blog einfügen
				wp_add_dashboard_widget( 'dashboard_custom_feed', 'digitaleheimat-Blog' , 'dashboard_custom_feed_output' );
				// Change widget position to the right site:
				// Then we make a backup of your widget
				$nm_widget = $wp_meta_boxes['dashboard']['normal']['core']['dashboard_custom_feed'];
				// We then unset that part of the array
				unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_custom_feed']);
				// Now we just add your widget back in
				$wp_meta_boxes['dashboard']['side']['core']['dashboard_custom_feed'] = $nm_widget;

			}
			add_action('wp_dashboard_setup', 'nm_dashboard_widgets' );

			// digitaleheimat-Blog Feed Widget
			function dashboard_custom_feed_output() {
				echo '<div class="rss-widget">';
				wp_widget_rss_output(array(
					'url' => 'https://www.digitaleheimat.de/feed/',
					'title' => 'digitaleheimat-Blog Feed',
					'items' => 2,
					'show_summary' => 1,
					'show_author' => 0,
					'show_date' => 1
					));
				echo '</div>';
			}
		}
		
		function nm_BrandedLogin() {
			echo '<style type="text/css">'.
			'.login h1 a {
				background-image:url(https://www.novamatrix.de/nm-wp-branding-images/login-logo.png) !important;
				height: 76px !important;
				width: 180px !important;
				background-size: 180px 76px !important;
				margin: 0 auto;
			}'.
			'</style>';
		}

		//Das StyleSheet mit einer Action aktivieren
		add_action('login_head', 'nm_BrandedLogin');

		// CUSTOM ADMIN LOGIN HEADER LINK & ALT TEXT
		function change_wp_login_url() {
			$returnString = "https://www.digitaleheimat.de";
			return $returnString;
		}

		function change_wp_login_title() {
			$returnString = "digitaleheimat";
			return $returnString;
		}

		add_filter('login_headerurl', 'change_wp_login_url');
		add_filter('login_headertitle', 'change_wp_login_title');

		/*
		 * Disable the emoji's
		*/
		function disable_emojis() {
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
			add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
		}
		add_action( 'init', 'disable_emojis' );

		/*
		 * Filter function used to remove the tinymce emoji plugin.
		*/
		function disable_emojis_tinymce( $plugins ) {
			if ( is_array( $plugins ) ) {
				return array_diff( $plugins, array( 'wpemoji' ) );
			} else {
				return array();
			}
		}

		/*
		 * Remove emoji CDN hostname from DNS prefetching hints.
		 */
		function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
			if ( 'dns-prefetch' == $relation_type ) {
				/** This filter is documented in wp-includes/formatting.php */
				$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

				$urls = array_diff( $urls, array( $emoji_svg_url ) );
			}

			return $urls;
		}

	}
	
endif;
add_action( 'after_setup_theme', 'dh_digitaleheimat_setup' );