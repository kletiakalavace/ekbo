<div class="small-12 columns">
<div class="vikariat-kontakt">
    <h3><?php echo $title ?></h3>
    <p><?php echo $subtitle ?></p>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('vikariat_kontakt') ):

            // loop through the rows of data
            while ( have_rows('vikariat_kontakt') ) : the_row(); ?>
            <div class="row collapse vik-profile">
                <div class="medium-4 columns">
                    <img src="<?php echo get_sub_field('profile_picture'); ?>" alt="">
                </div>
                <div class="medium-8 columns">
                    <div class="vik-entry">
                        <h5><?php echo get_sub_field('title'); ?></h5>
                        <p><?php echo get_sub_field('desc'); ?></p>
                        <?php echo get_sub_field('kontakt'); ?>
                    </div>
                </div>
            </div>    
            <?php endwhile;

        endif;

        ?>
</div>
</div>