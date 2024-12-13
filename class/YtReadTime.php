<?php

class YtReadTime
{
    public static function get($content)
    {
        $count_words = str_word_count( strip_tags( $content ) );

        return ceil($count_words / 250)+1;
    }
}