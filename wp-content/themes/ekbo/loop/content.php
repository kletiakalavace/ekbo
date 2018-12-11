<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading ...', 'dhwpfstart' ) ); ?>
	</div>

	<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
</div>