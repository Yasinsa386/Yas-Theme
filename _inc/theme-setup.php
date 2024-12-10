<?php
function yt_theme_setup(): void
{
    add_filter('show_admin_bar', '__return_false');
    register_nav_menu('header', 'منو اصلی هدر');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'yt_theme_setup');
function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );