<?php
add_action('add_meta_boxes', 'yt_meta_box');
add_action('save_post', 'yt_save_meta_box');
function yt_meta_box()
{
    #1
    add_meta_box('yt_article_level', 'سطح و دسته نمایشی', 'yt_level_meta_box_callback', 'post');
}

function yt_save_meta_box($post_id)
{
    $nonce = $_POST['yt_level_nonce_filed'] ?? '';
    $nonce_action = 'yt_level_nonce_filed';
    if (!wp_verify_nonce($nonce, $nonce_action)) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (wp_is_post_autosave($post_id)) return;
    if (wp_is_post_revision($post_id)) return;

    $level = sanitize_text_field($_POST['_yt_level'] ?? '');
    update_post_meta($post_id, '_yt_post_level', $level);
    $category_name = sanitize_text_field($_POST['_yt_category_name'] ?? '');
    update_post_meta($post_id, '_yt_category_name', $category_name);
}

#1
function yt_level_meta_box_callback($post)
{
    wp_nonce_field('yt_level_nonce_filed', 'yt_level_nonce_filed');

    #for categories
    wp_dropdown_categories([
        'hide_empty' => false,
        'name' =>'_yt_category_name',
        'selected' => get_post_meta($post->ID, '_yt_category_name', true)
    ]);
    #for levels
    $level_option = get_post_meta($post->ID, '_yt_post_level', true);
    ?>
    <select name='_yt_level'>
        <option <?php selected($level_option, '1') ?> value='1'>مقدماتی</option>
        <option <?php selected($level_option, '2') ?> value='2'>متوسط</option>
        <option <?php selected($level_option, '3') ?> value='3'>پیشرفته</option>
    </select>
    <?php

}
