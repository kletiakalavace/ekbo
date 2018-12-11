<?php

// get list of pages in array
function dhwpfstart_getPages() {
    $pageNames  = array();
    $pageIds    = array();

    $getPages = get_posts( 'post_type=page&numberposts=-1&post_status=publish' );

    if ( $getPages ) {
        foreach ( $getPages as $post ) {
            $pageIds[] = $post->ID;
            $pageNames[] = $post->post_title;
        }
    }

    $pages = array_combine($pageIds, $pageNames);

    return $pages;
}

function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}