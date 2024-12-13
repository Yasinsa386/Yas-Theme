<?php

class YtPostCounter
{
    public static function add($post_id): bool|int
    {
        $views = get_post_meta($post_id, '_yt_post_views', true);
        if (!is_numeric($views)) $views = 0;
        return update_post_meta($post_id, '_yt_post_views', $views + 1);
    }

    public static function get($post_id)
    {
        return get_post_meta($post_id, '_yt_post_views', true);

    }
}