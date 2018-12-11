<div class="small-12 medium-6 column">
    <div class="studim-block-subpage" data-equalizer-watch>
        <h2><?php echo $headline ?></h2>
        <div style="background-image:url(<?php echo $background; ?>)"></div>
        <?php echo do_shortcode( $content ); ?>
        <span>
            <a href="<?php echo $link ?>"><?php _e( 'Mehr erfahren', 'dhwpfstart' )  ?></a>
        </span>
    </div>
</div>