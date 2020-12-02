<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style'),
        filemtime(get_theme_file_path('style.css'))
    );
}



function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(500, 383, true);

remove_filter( 'the_content', 'wp_make_content_images_responsive' );

if ( ! isset( $content_width ) )
$content_width = 1000;

add_image_size('megaimg', 300, 185, true);

remove_filter('pre_user_description', 'wp_filter_kses');

remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

add_filter( 'pre_site_transient_update_core', '__return_zero' );
remove_action( 'wp_version_check', 'wp_version_check' );
remove_action( 'admin_init', '_maybe_update_core' );

remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );

function header_scripts() {
    wp_enqueue_script('header-script', get_stylesheet_directory_uri() . '/assets/js/header.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'header_scripts');




/**
 * Google Fonts
 */

function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'google-webfont-style',
        'fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet"'
    );
}

add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');
