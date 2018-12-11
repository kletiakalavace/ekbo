	</section>

	<div class="footer-container" data-sticky-footer>
		
		<footer class="footer">
			<div class="footer-widgets">
				<div class="row">
					<div class="small-12 medium-4 column">
						<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
					</div>
					<div class="small-12 medium-4 column">
						<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
					</div>
					<div class="small-12 medium-2 column">
						<?php dynamic_sidebar( 'footer-widgets-3' ); ?>
					</div>
					<div class="small-12 medium-2 column">
						<h6><?php _e( 'Folge uns', 'dhwpfstart' )  ?></h6>
						<ul class="social">
							<li class="facebook">
								<a href="<?php echo get_theme_mod( 'theme_social_link_facebook' );?>" target="_blank">
									<img src="<?php echo get_template_directory_uri()  ?>/assets/img/facebook-icon.png" alt="">
								</a>
							</li>
							<li class="twitter">
								<a href="<?php echo get_theme_mod( 'theme_social_link_twitter' );?>">
									<img src="<?php echo get_template_directory_uri()  ?>/assets/img/twitter-icon.png" alt="">
								</a>
							</li>
							<li class="instagram">
								<a href="<?php echo get_theme_mod( 'theme_social_link_instagram' );?>">
									<img src="<?php echo get_template_directory_uri()  ?>/assets/img/instagram.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="row">
					<div class="small-12 medium-6 column">
						<span>&copy; <?php echo get_theme_mod( 'copyright' ) ?></span>
					</div>
					<div class="small-12 medium-6 column">
						<?php wp_nav_menu('footer-nav'); ?>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div>
	<?php endif; ?>

	<?php wp_footer(); ?>

</body>
</html>
