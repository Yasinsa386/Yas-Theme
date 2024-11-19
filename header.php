<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/base.min.css"/>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/choices.min.css"/>

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/all.min.css"/>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/vendor/leaflet/leaflet.css"/>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/vendors.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/main.css">

    <title>Educrat - قالب HTML دوره آنلاین و آموزش اِدُکرات</title>
    <?php wp_head(); ?>
</head>
<?php
get_template_part('partials/header/header',$args['header_name']);
