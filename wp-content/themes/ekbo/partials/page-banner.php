<?php if( is_blog() ) {
    $page_ID = get_option( 'page_for_posts' );
} else {
    $page_ID = get_the_ID();
} ?>

<div class="banner">
    <div class="row">
        <div class="small-12 column">
            <div>
                <?php if(get_field('icon', $page_ID )): ?>
                    <div><img src="<?php echo get_field('icon', $page_ID); ?>" alt=""></div>
                <?php endif; ?>
                <h1 class="page-title"><?php echo get_field('banner_title', $page_ID); ?></h1>
                <p class="page-subtitle"><?php echo get_field('banner_subtitle', $page_ID); ?></p>
            </div>
        </div>
    </div>
</div>