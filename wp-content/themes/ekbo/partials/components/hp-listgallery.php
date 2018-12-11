<h2 class="front-page-title"><?php echo get_field('gallery_title'); ?></h2>
<span class="front-page-subtitle"><?php ?><?php echo get_field('gallery_subtitle'); ?></span>

<div class="row list-gallery">
    <div class="small-12 column">
        <?php
            $images = get_field('gallery');
            $size = 'full';

            if( $images ): ?>
                
                    <?php foreach( $images as $key=>$image ): ?>

                    <div class="gallery">
                        <div class="gallery-item" style="background-image: url(<?php echo $image['url'] ?>)"></div>
                    </div>

                    <?php endforeach; ?>

            <?php endif;

        ?>
    </div>
</div>

<div class="row">                    
    <div class="small-12 columns">
        <a class="load-more-gallery" href="./gallery"><?php _e( 'Mehr bilder ansehen', 'dhwpfstart' ) ?></a>
    </div>
</div>