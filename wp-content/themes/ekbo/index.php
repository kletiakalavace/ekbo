<?php get_header(); ?>

<?php get_template_part( 'partials/page', 'banner' ); ?>

<div class="main-wrap" role="main">

<?php get_template_part( 'partials/page', 'description' ); ?>
	
	<div class="row list-posts">
		<?php

			if ( have_posts() ) : ?>
			
				<?php while ( have_posts() ) : the_post(); ?> 

					<div class="small-12 medium-4 column list-post-item">
						<?php if(has_post_thumbnail()){ ?>
							<div class="image-background" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
						<?php } ?>
						<div class="post-item-info">
							<?php
								$categories = get_the_category();
								foreach( $categories as $category ) { ?>
									<div class='category'>
										<?php  echo '<span>' . $category->name . '</span>'; ?>
									</div>
							<?php  } ?>
							<h2 class="title"><?php the_title() ?></h2>
							<p class="post-content"><?php print get_the_content() ?></p>
							<p class="author">
								<span><?php _e( 'Geschrieben von', 'dhwpfstart' ) ?></span>
								<span>
									<strong>
										<?php echo get_the_author();?> , <?php echo get_the_date('d M, Y') ?> 
									</strong>
								</span>
							</p>
							<p class="comments">
								<span><?php echo get_comments_number(); ?></span>
								<span><?php _e( 'Comments' , 'dhwpfstart' ) ?></span>
							</p>
							
							<a href="<?php the_permalink(); ?>"><?php _e( 'WEITER LESEN', 'dhwpfstart' ) ?></a>        
						</div>
					</div>
					
				<?php endwhile; ?>
			
				<?php wp_reset_postdata(); ?>
			<?php endif;
		?>
	</div>
		<?php
			global $wp_query; // you can remove this line if everything works for you
			
			// don't display the button if there are not enough posts
			if (  $wp_query->max_num_pages > 1 ): ?>
				<div class="row">                    
					<div class="small-12 columns loadMore">
						<?php next_posts_link( 'weitere Beiträge ansehen' ); ?>
					</div>
				</div>
			<?php endif; 
		?>
	

</div>

<!-- Ajax Load More -->
<script type="text/javascript">
	jQuery(document).ready( function($){
		
		$('.loadMore a').live('click', function(e){
			e.preventDefault();
			var link = jQuery(this).attr('href');

			$.get(link, function(data) {
				var post = $(".list-post-item ", data);
				$('.list-posts').append(post).masonry( 'appended', post );
			});
			jQuery('.loadMore').load(link+' .loadMore a');
		});

	});

	

</script>

<?php get_footer();