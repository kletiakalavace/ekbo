<?php

/*
shortcode for [studim-block]
*/
function studim_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'link' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/studim-block.php');
    return ob_get_clean();
}

add_shortcode('studim-block', 'studim_block_fuc');

/*
shortcode for [studim-block-page]
*/
function studim_block_page_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'link' => '',
        'background' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/studim-block-page.php');
    return ob_get_clean();
}

add_shortcode('studim-block-page', 'studim_block_page_fuc');

/*
shortcode for [question-block]
*/
function question_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/question-block.php');
    return ob_get_clean();
}

add_shortcode('question-block', 'question_block_fuc');

/*
shortcode for [studim-col-6]
*/
function studim_col_6_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'link' => '',
        'background' => '',
        'headline' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/studim-col-6.php');
    return ob_get_clean();
}

add_shortcode('studim-col-6', 'studim_col_6_fuc');

/*
shortcode for [studim-col-12]
*/
function studim_col_12_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'headline' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/studim-col-12.php');
    return ob_get_clean();
}

add_shortcode('studim-col-12', 'studim_col_12_fuc');

/*
shortcode for [studienorte-block]
*/
function studienorte_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'headline' => '',
        'title' => '',
        'img' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/studienorte-block.php');
    return ob_get_clean();
}

add_shortcode('studienorte-block', 'studienorte_block_fuc');

/*
shortcode for [img-block]
*/
function img_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'img' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/img-block.php');
    return ob_get_clean();
}

add_shortcode('img-block', 'img_block_fuc');

/*
shortcode for [content-block]
*/
function content_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/content-block.php');
    return ob_get_clean();
}

add_shortcode('content-block', 'content_block_fuc');

/*
shortcode for [medium-6-block]
*/
function medium_6_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'img' => '',
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/medium-6-block.php');
    return ob_get_clean();
}

add_shortcode('medium-6-block', 'medium_6_fuc');