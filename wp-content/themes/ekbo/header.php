<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if (get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas') : ?>
    <?php get_template_part( 'partials/header/mobile-off-canvas' ); ?>
    <?php endif; ?>

    <header class="site-header" role="banner">
        <div class="row">
            <div class="site-title-bar title-bar" <?php dhwpfstart_title_bar_responsive_toggle(); ?>>
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-toggle="<?php dhwpfstart_mobile_menu_id(); ?>"></button>
                    <span class="site-mobile-title title-bar-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo get_theme_mod( 'theme_logo' );?>" alt="ekbo">
                        </a>
                        <img src="<?php echo get_theme_mod( 'theme_logo_center' );?>" alt="ekbo">
                    </span>
                </div>
                <div class="socials">
                    <ul>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_facebook' ); ?>">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/facebook-icon.png" alt="facebook">
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_twitter' );?>">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/twitter-icon.png" alt="">
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_instagram' );?>">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <nav class="site-navigation top-bar" role="navigation">
                <div class="top-bar-left">
                    <div class="site-desktop-title top-bar-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo get_theme_mod( 'theme_logo' );?>" alt="ekbo">
                        </a>
                        <img src="<?php echo get_theme_mod( 'theme_logo_center' );?>" alt="ekbo">
                    </div>
                </div>
                <div class="socials">
                    <ul>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_facebook' );?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/facebook-icon.png" alt="">
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_twitter' );?>">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/twitter-icon.png" alt="">
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="<?php echo get_theme_mod( 'theme_social_link_instagram' );?>">
                                <img src="<?php echo get_template_directory_uri()  ?>/assets/img/instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <?php if (is_front_page()) : ?>

        <div class="header-slider">
            <?php

                // the query
                $args = array(
                    'post_type' => 'post'
                );
                $the_query = new WP_Query( $args ); ?>

                <?php if ($the_query->have_posts()) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ($the_query->have_posts()) :
                        $the_query->the_post(); ?>


                        <?php if (get_field('is_features_image') == 'yes') : ?>
                            <div class="slider-item" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                                <div class="overlay"></div>
                                <div class="slider-info">
                                    <span class="date"><?php echo get_the_date('d M, Y') ?></span>
                                    <p class="slider-text"><?php echo get_field('slider_text') ?></p>
                                    <a href="<?php the_permalink(); ?>" class="more"><?php _e('WEITER LESEN', 'ekbo'); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
                    <!-- end of the loop -->

                    <!-- pagination here -->

                    <?php wp_reset_postdata(); ?>
                    
                <?php endif;
            ?>
        </div>

        <?php endif; ?>
        <div class="menu-desktop">
            <div class="row">
                <div class="small-12 medium-9 columns menu-ul">
                    <?php dhwpfstart_top_bar_r(); ?>

                    <?php if (! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar') : ?>
                    <?php get_template_part( 'partials/header/mobile-top-bar' ); ?>
                    <?php endif; ?>
                </div>
                <div class="small-12 medium-3 columns">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
        
    </header>

    <section class="container">
