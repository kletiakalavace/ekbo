<?php
/*
Template Name: Full Width
*/
get_header();
get_template_part( 'loop/featured-image' ); ?>

<div class="main-wrap full-width" role="main">

	<?php
	while ( have_posts() ) : the_post(); ?>

		<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		
		</article>

		<?php
	endwhile;
	?>

</div>

<?php get_footer();