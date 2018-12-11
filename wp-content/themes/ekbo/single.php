<?php get_header(); ?>

<?php get_template_part( 'loop/featured-image' ); ?>

<div class="main-wrap" role="main">

	<div class="row">
		<div class="small-12 medium-9 columns left-column">
			
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'loop/content', 'page' );
				endwhile;
			else :
				get_template_part( 'loop/content', 'none' );
			endif;

			dhwpfstart_pagination();
			?>

		</div>
		<div class="small-12 medium-3 columns right-column">	
			<?php get_sidebar(); ?>
		</div>

	</div>

</div>

<?php get_footer();