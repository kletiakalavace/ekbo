<div class="small-12 columns">
<div class="kontakt-repeater">
    <h3><?php echo $title ?></h3>
    <h4><?php echo $subtitle ?></h4>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('kontakt') ):

            // loop through the rows of data
            while ( have_rows('kontakt') ) : the_row(); ?>
            <div class="row collapse vik-profile">
                <div class="medium-3 columns">
                    <img src="<?php echo get_sub_field('profile_picture'); ?>" alt="">
                </div>
                <div class="medium-9 columns">
                    <h5><?php echo get_sub_field('title'); ?></h5>
                    <p><?php echo get_sub_field('desc'); ?></p>
                    <p><?php echo get_sub_field('kontakt'); ?></p>
                </div>
            </div>    
            <?php endwhile;

        endif;

        ?>
</div>
</div>