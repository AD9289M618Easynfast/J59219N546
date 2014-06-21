<?php

/**
 * *********************************************
 * Methods Summary: Setup EasynFast Theme
 * *********************************************
 */
function easynfast_setup() {
    load_theme_textdomain('EasynFast', get_template_directory() . '/languages');

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('primary', __('Primary Menu', 'EasynFast'));
    register_nav_menu('footer', __('Footer Menu', 'EasynFast'));

    global $siteNameSeo;
    $siteNameSeo = 'EasynFast';

    global $prefix;
    $prefix = 'prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"';

    global $imagePath;
    $imagePath = get_template_directory_uri() . '/images/theme/';

    global $imageIconPath;
    $imageIconPath = get_template_directory_uri() . '/images/theme/icon/';

    global $imageFbPath;
    $imageFbPath = get_template_directory_uri() . '/images/theme/fb-thumbs/';

    global $imageBannerPath;
    $imageBannerPath = get_template_directory_uri() . '/images/theme/banner/';

    global $mainNav;
    $mainNav = array(
        'menu' => 'main-nav',
        'container' => '',
        'menu_class' => 'main-nav fright',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
    );
}

add_action('after_setup_theme', 'easynfast_setup');

/**
 * *********************************************
 * Methods Summary: Set Javascript & Stylesheet for Theme
 * *********************************************
 */
function setup_Js_Styling() {
    wp_deregister_script('jquery');
    wp_deregister_style('open-sans-css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.8.0.min.js');
    //Import Jquery UI
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui-1.10.4.min.js');
    wp_enqueue_style('jquery-ui-style', get_template_directory_uri() . '/css/jquery-ui-1.10.4.css');

    //Import BxSlider
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
    wp_enqueue_style('bxslider-style', get_template_directory_uri() . '/css/jquery.bxslider.css');

    //Import PrettyPhoto
    wp_enqueue_script('prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js');
    wp_enqueue_style('prettyphoto-style', get_template_directory_uri() . '/css/prettyPhoto.css');

    wp_enqueue_script('easynfast', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('linkedin', '//platform.linkedin.com/in.js', array(), '1.0.0', true);
//assets.pinterest.com/js/pinit.js
    /*
     * Set up Stylesheet.
     */
    wp_enqueue_style('reset-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.easynfast.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/style.responsive.css');
    wp_enqueue_style('new-css', get_template_directory_uri() . '/css/style.css3.css');
}

add_action('wp_enqueue_scripts', 'setup_Js_Styling');

/**
 * *********************************************
 * Methods Summary: Remove <p> tags in post and pages
 * *********************************************
 */
remove_filter('the_content', 'wpautop');
remove_filter('comment_text', 'wpautop');

/**
 * *********************************************
 * Methods Summary: Methods to set .html to pages
 * *********************************************
 */
function html_page_permalink() {
    global $wp_rewrite;
    if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
}

add_action('init', 'html_page_permalink');

function no_page_slash($string, $type) {
    global $wp_rewrite;
    if ($wp_rewrite->using_permalinks() && $wp_rewrite->use_trailing_slashes == true && $type == 'page') {
        return untrailingslashit($string);
    } else {
        return $string;
    }
}

add_filter('user_trailingslashit', 'no_page_slash', 66, 2);

function active() {
    global $wp_rewrite;
    if (!strpos($wp_rewrite->get_page_permastruct(), '.html')) {
        $wp_rewrite->page_structure = $wp_rewrite->page_structure . '.html';
    }
    $wp_rewrite->flush_rules();
}

register_activation_hook(__FILE__, 'active');
add_filter('show_admin_bar', '__return_false');


