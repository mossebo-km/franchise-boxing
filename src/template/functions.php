<?php

if ($_SERVER["SCRIPT_NAME"] == THEME_DIR . "functions.php") {
    die();
}

define('SITE_TITLE', get_bloginfo('name'));
define('SITE_DESCRIPTION', get_bloginfo('description'));
define('SITE_CHARSET', get_bloginfo('charset'));
define('SITE_URL', get_bloginfo('url'));
define('THEME_DIR', get_template_directory_uri());

function theme_files()
{
    // JQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', THEME_DIR . '/assets/js/app.bundle.js', true, null, false);
    wp_enqueue_script('jquery');
    // JQuery-migrate
    wp_deregister_script('jquery-migrate');
    // Custom CSS
    wp_register_style('style-css', THEME_DIR . '/assets/css/app.css', array(), null, 'all');
    wp_enqueue_style('style-css');
}

add_action('wp_enqueue_scripts', 'theme_files');

// Поддержка миниатюр
add_theme_support('post-thumbnails');
//add_image_size( '220_220', 220, 220, array( 'center', 'center' ) );
//add_image_size( 'photo-otziv', 120, 120, array( 'center', 'center' ) );


// This theme uses wp_nav_menu() in two locations.
add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu'
    ));
});


function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('rest_enabled', '__return_false');
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);
remove_action('init', 'rest_api_init');
remove_action('rest_api_init', 'rest_api_default_filters', 10, 1);
remove_action('parse_request', 'rest_api_loaded');
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_resource_hints', 2);

?>
