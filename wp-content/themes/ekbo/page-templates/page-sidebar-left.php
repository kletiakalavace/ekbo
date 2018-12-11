<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<div class="main-wrap sidebar-left" role="main">

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

	<?php get_sidebar(); ?>

</div>

<?php get_footer();