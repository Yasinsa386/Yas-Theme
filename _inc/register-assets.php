
<?php
function yt_register_assets(): void
{
    #CSS
//      Register
    wp_register_style(
        'yt_base',
        YT_BASE_URL . 'assets/css/base.min.css',
        null,
        '1.0.0'
    );
    wp_register_style(
        'yt_choices',
        YT_BASE_URL . 'assets/css/choices.min.css',
        null,
        '1.0.0'
    );
    wp_register_style(
        'yt_all',
        YT_BASE_URL . 'assets/css/all.min.css',
        null,
        '1.0.0'
    );
    wp_register_style(
        'yt_leaflet',
        YT_BASE_URL . 'assets/vendor/leaflet/leaflet.css',
        null,
        '1.0.0'
    );
    wp_register_style(
        'yt_vendors',
        YT_BASE_URL . 'assets/css/vendors.css',
        null,
        '1.0.0'
    );
    wp_register_style(
        'yt_main',
        YT_BASE_URL . 'assets/css/main.css',
        null,
        '1.0.0'
    );
//      Enqueue
    wp_enqueue_style('yt_base');
    wp_enqueue_style('yt_choices');
    wp_enqueue_style('yt_all');
    wp_enqueue_style('yt_leaflet');
    wp_enqueue_style('yt_vendors');
    wp_enqueue_style('yt_main');

    #JS
    //      Register

    wp_register_script(
        'yt_leaflet',
        YT_BASE_URL . 'assets/vendor/leaflet/leaflet.js',
        '',
        '1.0.0',
        ['in_footer' => true]
    );
    wp_register_script(
        'yt_vendors',
        YT_BASE_URL . 'assets/js/vendors.js',
        '',
        '1.0.0',
        ['in_footer' => true]
    );
    wp_register_script(
        'yt_main',
        YT_BASE_URL . 'assets/js/main.js',
        '',
        '1.0.0',
        ['in_footer' => true]
    );
//      Enqueue
    wp_enqueue_script('yt_leaflet');
    wp_enqueue_script('yt_vendors');
    wp_enqueue_script('yt_main');

}

add_action('wp_enqueue_scripts', 'yt_register_assets');
