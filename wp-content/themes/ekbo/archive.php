<?php get_header(); ?>

<div class="main-wrap" role="main">
	
	<article class="main-content">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'loop/content', get_post_format() );
			endwhile;
		else :
			get_template_part( 'loop/content', 'none' );
		endif;

		dhwpfstart_pagination();
		?>

	</article>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();