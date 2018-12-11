<div class="small-12 columns">
<div class="vikariat-dokument">
    <div class="vikariat-dokument-entry">
        <h3><?php echo $title ?></h3>
        <p><strong><?php echo $subtitle ?></strong></p>
    </div>    
        <?php

        // check if the repeater field has rows of data
        if( have_rows('dokument') ):

            // loop through the rows of data
            while ( have_rows('dokument') ) : the_row(); ?>
            <div class="row vikariat-dokument-download">
                <div class="medium-1 columns">
                    <img src="../wp-content/uploads/2017/10/pdf.png">
                </div>
                <div class="medium-9 columns">
                    <a href="<?php echo get_sub_field('dokument_url'); ?>"><?php echo get_sub_field('dokument_title'); ?></a>
                </div>
                <div class="medium-1 columns">
                    <a href="<?php echo get_sub_field('download_url'); ?>"><img src="../wp-content/uploads/2017/10/download-button.png"></a>
                </div>
            </div>    
            <?php endwhile;

        endif;

        ?>
</div>
</div>