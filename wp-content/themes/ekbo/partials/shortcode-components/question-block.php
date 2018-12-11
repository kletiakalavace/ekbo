<div class="question-block">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('questions') ):

        // loop through the rows of data
        while ( have_rows('questions') ) : the_row(); ?>

            <div class="question-item">
                <span></span>
                <h3><?php echo get_sub_field('question'); ?></h3>
                <div class="question-hide">
                    <p><?php echo get_sub_field('answer'); ?></p>
                    <a href="<?php echo get_sub_field('link'); ?>"><?php _e( 'Mehr erfahren', 'dhwpfstart' ) ?></a>
                </div>
            </div>
            
        <?php endwhile;

    endif;

    ?>
    
</div>