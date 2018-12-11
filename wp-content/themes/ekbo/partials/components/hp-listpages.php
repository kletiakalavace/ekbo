<div class="row list-pages">
    <?php 

        $pageId1 = get_theme_mod('page_content_1');
        $pageId2 = get_theme_mod('page_content_2');
        $pageId3 = get_theme_mod('page_content_3');
        $pageId4 = get_theme_mod('page_content_4');
        $pageId5 = get_theme_mod('page_content_5');
        $pageId6 = get_theme_mod('page_content_6');

        ekbo_contentPages($pageId1);
        ekbo_contentPages($pageId2);
        ekbo_contentPages($pageId3);
        ekbo_contentPages($pageId4);
        ekbo_contentPages($pageId5);
        ekbo_contentPages($pageId6);
    
    ?>
</div>