<div class="row list-posts">
    <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) : ?>
        
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 

                <div class="small-12 medium-6 column list-post-item">
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

<div class="row">                    
    <div class="small-12 columns">
        <a class="load-more" href="./blog"><?php _e( 'weitere Beiträge ansehen', 'dhwpfstart' ) ?></a>
    </div>
</div>