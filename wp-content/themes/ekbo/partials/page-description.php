<?php if( is_blog() ) {
    $page_ID = get_option( 'page_for_posts' );
} else {
    $page_ID = get_the_ID();
} ?>


<div class="row page-description">
    <div class="small-12 column">
        <h2><?php echo get_field('title', $page_ID); ?></h2>
        <p><?php echo get_field('subtitle', $page_ID); ?></p>
    </div>
</div>