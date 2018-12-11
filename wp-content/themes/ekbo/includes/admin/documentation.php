<?php

/**
 * add admin settings page navigation
 */
function dhwpfstart_documentation() {
    add_theme_page(
        'DHWP Foundation Starter Documentation',
        'Documentation',
        'edit_theme_options',
        'dhwpfstart_theme_doc',
        'dhwpfstart_theme_documentation',
        5
    );
}
add_action('admin_menu', 'dhwpfstart_documentation');

/**
 * the admin settings page
 */
function dhwpfstart_theme_documentation() { ?>

	<div id="wpbody">
		<div id="wpbody-content" aria-label="Main content" tabindex="0">
			<div class="wrap">
				
				<div class="documentation-content">

					<div id="documentation-menu" class="section menu">
						
						<h1>DHWP Foundation Starter - Theme Documentation</h1>
						<div class="clear"></div>
						<div class="documentation-details">
							<b>Theme Version:</b> 0.0.1<br>
							<b>Theme Author:</b> Manoolia / DigitaleHeimat GmbH<br>
							<b>Documentation Author:</b> Manoolia / DigitaleHeimat GmbH<br>
							<b>Documentation Version:</b> v0.1 (2017-08-30)<br>
						</div>
						<div class="clear"></div>
						
						<br>
						<h2>Theme Documentation Structure</h2>
						<ul class="menu">
							<li><a href="#installation">Installing the theme</a></li>
							<li><a href="#initconfig">Initial theme configuration</a></li>
						</ul>

					</div>

					<div id="installation" class="section">
						<h2>Theme installation</h2>
						<p>The theme can be installed in 2 different ways:</p>
						<ul>
							<li>
								By uploading the theme using a ftp client (FileZilla, CuteFTP, etc) on your server and then activate the theme from the WordPress dashboard.
							</li>
							<li>
								By uploading the archived (zip) version of the theme to your WordPress installation using the theme uploader.
							</li>
						</ul>
					</div>

					<div id="initconfig" class="section">
						<h2>Inital theme configuration</h2>
						<p>
							<?php $customize_url = admin_url( 'customize.php', 'http' ); ?>
							<ol>
								<li>Open the <a href="<?php echo $customize_url; ?>" target="_blank">Theme Customizer</a></li>
								<li>Open the <b>DHWP Foundation Starter Theme Options</b> panel</li>
								<li>Open the <b>Main Theme Configuration</b> section</li>
								<li>Chose the correct default universal image (image that will appear on all pages/views that dont have a featured image set).</li>
							</ol>
							<br>
							<ol>
								<li>Open the <a href="<?php echo $customize_url; ?>" target="_blank">Theme Customizer</a></li>
								<li>Open the <b>DHWP Foundation Starter Theme Options</b> panel</li>
								<li>Open the <b>Main Theme Configuration</b> section</li>
								<li>Open the <b>Contact Details</b> section</li>
								<li>In the textareas enter the content that will appear on the contact form and the details (address or anything you enter in the first textarea).</li>
							</ol>
							<br>
							The images appearing in featured images template in frontend are dynamic. The user can chose which images will be shown here opening the Post and uploading or selecting an already uploaded image from the media library.
						</p>
					</div>

				</div>
				<br>
				<div class="clear"></div>


				<a href="#" id="backToTop" class="back-to-top">&uarr;</a>

			</div>
		</div>
    </div>

    <style>
		#wpbody * { font-size: 18px; font-family: "Arial"; line-height: 26px; }

		#wpbody .back-to-top {
			position: fixed;
			bottom: 20px;
			right: 20px;
			padding: 10px 20px;
			background: #111;
			color: #fff;
			text-decoration: none;
			z-index: 100;
			display: none;
			font-size: 20px;
		}
		
		#wpbody .back-to-top:active,
		#wpbody .back-to-top:focus { outline: none !important; }

    	#wpbody h1 { font-size: 32px !important; font-weight: 600 !important; line-height: 40px; padding-bottom: 20px; }

    	#wpbody img { margin: 20px 0; display: block; width: 100%; height: auto; border: 1px solid #ccc; }
		
		#wpbody small { font-size: 14px; }
		#wpbody sup { font-size: 12px; }
		
		#wpbody ul { list-style: square; }
    	#wpbody ul, #wpbody ol { margin-left: 40px; padding-top: 20px; padding-bottom: 20px; }
    	
    	#wpbody ul.menu { margin-left: 0 !important; list-style: none !important; padding: 0 !important; }
    	#wpbody ul.menu li { margin: 6px 0; }
		#wpbody ul.menu li a { font-size: 18px; font-family: "Arial"; }
		#wpbody ul.menu li a:hover { color: #222; }

    	#wpbody .section.menu { background: #fff; margin-top: 20px; }

		#wpbody .section { padding: 20px; margin-bottom: 40px; border-top: 6px solid #555; border-bottom: 5px; background: #fff; }
		#wpbody .section h2 { font-size: 24px !important; padding: 0; margin: 0; padding-bottom: 20px; }
    </style>

	<script>
	jQuery(document).ready(function(){
		
		jQuery('.menu a').click(function(e) {

			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					jQuery('html, body').animate({
						scrollTop: target.offset().top - 50
					}, 1000);
					return false;
				}
			}

		});

		jQuery(window).scroll(function() {
		    if (jQuery(this).scrollTop() >= 100) {
		        jQuery('#backToTop').fadeIn(50);
		    } else {
		        jQuery('#backToTop').fadeOut();
		    }
		});

		jQuery('#backToTop').click(function(e) {
			e.preventDefault();
		    jQuery('body, html').animate({
		        scrollTop : 0
		    }, 500);
		});

	});
	</script>

  	<?php
}