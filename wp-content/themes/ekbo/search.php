<?php get_header(); ?>

<div class="main-wrap" role="main">

	<article <?php post_class('main-content') ?> id="search-results">

		<header>
			<h1 class="entry-title"><?php _e( 'Search Results for', 'dhwpfstart' ); ?> "<?php echo get_search_query(); ?>"</h1>
		</header>

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