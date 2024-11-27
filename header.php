<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title() ?></title>

    <?php wp_head(); ?>
</head>
<?php
get_template_part('partials/header/header', $args['header_name']);
