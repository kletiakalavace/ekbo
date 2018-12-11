<?php 

/*
shortcode for [vikariat-block]
*/
function vikariat_block_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'title' => '',
        'link' => '',
        'button_text' => ''
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/vikariat-block.php');
    return ob_get_clean();
}

add_shortcode('vikariat-block', 'vikariat_block_fuc');

/*
shortcode for [vikariat-mentor]
*/
function vikariat_mentor_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'title' => '',
        'title_two' => '',
        'link' => ''
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/vikariat-mentor.php');
    return ob_get_clean();
}

add_shortcode('vikariat-mentor', 'vikariat_mentor_fuc');

/*
shortcode for [vikariat-kontakt]
*/
function kontakt_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'title' => '',
        'subtitle' => ''
    ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/kontakt-repeater.php');
    return ob_get_clean();
}

add_shortcode('kontakt', 'kontakt_fuc');

/*
shortcode for [vikariat-dokument]
*/
function vikariat_dokument_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'title' => '',
        'subtitle' => ''
        ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/vikariat-dokument.php');
    return ob_get_clean();
}

add_shortcode('vikariat-dokument', 'vikariat_dokument_fuc');

/*
shortcode for [vikariat-kontakt]
*/
function vikariat_kontakt_fuc($atts, $content = '')
{
    $atts = (shortcode_atts(array(
        'title' => '',
        'subtitle' => ''
        ), $atts));

    extract($atts);

    ob_start();
    require(get_template_directory() . '/partials/shortcode-components/vikariat-kontakt.php');
    return ob_get_clean();
}

add_shortcode('vikariat-kontakt', 'vikariat_kontakt_fuc');


/*
shortcode for [vikariat-ausbildungsorte]
*/
function vikariat_ausbildungsorte_fuc($atts, $content = '')
{

    $atts = (shortcode_atts(array(
        'post_title' => '',
        'image' => '',
        'button' => '',
        'link' => ''
        ), $atts));

    extract($atts);

    require(get_template_directory() . '/partials/shortcode-components/vikariat-ausbildungsorte.php');
    return ob_get_clean();
}

add_shortcode('vikariat-ausbildungsorte', 'vikariat_ausbildungsorte_fuc');


/*
shortcode for [vikariat-ausbildungsorte-nobutton]
*/
function vikariat_ausbildungsorte_nobutton_fuc($atts, $content = '')
{

    $atts = (shortcode_atts(array(
        'post_title' => '',
        'image' => ''
        ), $atts));

    extract($atts);

    require(get_template_directory() . '/partials/shortcode-components/vikariat-ausbildungsorte-nobutton.php');
    return ob_get_clean();
}

add_shortcode('vikariat-ausbildungsorte-nobutton', 'vikariat_ausbildungsorte_nobutton_fuc');


/*
shortcode for [vikariat-ausbildungsorte-two]
*/
function vikariat_ausbildungsorte_two_fuc($atts, $content = '')
{

    $atts = (shortcode_atts(array(
        'post_title' => '',
        'image' => '',
        'button' => '',
        'link' => ''
        ), $atts));

    extract($atts);

    require(get_template_directory() . '/partials/shortcode-components/vikariat-ausbildungsorte-two.php');
    return ob_get_clean();
}

add_shortcode('vikariat-ausbildungsorte-two', 'vikariat_ausbildungsorte_two_fuc');


/*
shortcode for [vikariat-inhalte]
*/
function vikariat_inhalte_fuc($atts, $content = '')
{

    $atts = (shortcode_atts(array(
        'title' => '',
        'post_title' => '',
        'image' => ''
         ), $atts));

    extract($atts);

    require(get_template_directory() . '/partials/shortcode-components/vikariat-inhalte.php');
    return ob_get_clean();
}

add_shortcode('vikariat-inhalte', 'vikariat_inhalte_fuc');