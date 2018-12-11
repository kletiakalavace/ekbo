<h2 class="front-page-title"><?php echo get_field('title'); ?></h2>
<span class="front-page-subtitle"><?php ?><?php echo get_field('subtitle'); ?></span>

<?php get_template_part( 'partials/components/hp', 'listpages' ); ?>

<?php get_template_part( 'partials/components/hp', 'listposts' ); ?>

<?php get_template_part( 'partials/components/hp', 'listgallery' ); ?>