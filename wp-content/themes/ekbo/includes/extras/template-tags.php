<?php

if ( ! function_exists( 'dhwpfstart_entry_meta' ) ) :
	
	function dhwpfstart_entry_meta() {
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'dhwpfstart' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'Written by', 'dhwpfstart' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
	}
	
endif;

function ekbo_contentPages($page_id) { ?>
	<?php 

		$pageContent = get_post( $page_id );

	?>
	<div class="small-12 medium-4 column">
		<div class="page-background" style="background-image: url(<?php echo get_the_post_thumbnail_url($pageContent->ID) ?>)">
			<div class="page-info">
				<div><img src="<?php  echo get_field('icon', $pageContent->ID) ?>" alt=""></div>
				<h2><?php echo $pageContent->post_title;  ?></h2>
				<span><?php echo get_field('subtitle', $pageContent->ID)  ?></span>
				<a href="<?php echo $pageContent->guid;  ?>"><?php _e( 'WEITER LESEN', 'dhwpfstart' ) ?></a>
			</div>
		</div>
	</div>
<?php }