<div class="row">
    <div class="small-12 column">
        <?php if(has_post_thumbnail()): ?>
            <div class="page-thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
        <?php endif; ?>
    </div>
</div>

<div class="row" data-equalizer data-equalize-on="medium">
    <?php the_content(); ?>
</div>