<div class="small-12 medium-12 column">
    <div class="studim-block-subpage class-12">
        <?php if($headline != ''): ?>
            <h2><?php echo $headline ?></h2>
        <?php endif; ?>
        <?php echo do_shortcode( $content ); ?>
    </div>
</div>