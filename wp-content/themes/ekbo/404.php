<?php get_header(); ?>

<div class="main-wrap" role="main">
	
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		
		<header>
			<h1 class="entry-title"><?php _e( 'Page Not Found', 'dhwpfstart' ); ?></h1>
		</header>

		<div class="entry-content">
			<div class="error">
				<?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'dhwpfstart' ); ?>
			</div>
		</div>

	</article>

	<?php get_sidebar(); ?>

</div>

<?php get_footer();