<?php

class YtWalker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"subnav\">\n" . '<li class="menu__backButton js-nav-list-back">
                                                    <a href="#"><i class="icon-chevron-right text-13 ml-10"></i> بازگشت</a>
                                                </li>'; // کلاس‌های مورد نظر شما
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . ' data-barba>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

// بررسی وجود فرزندان
        $has_children = !empty($item->classes) && in_array('menu-item-has-children', $item->classes);
        if ($has_children) {
            $item_output = str_replace('<li', '<li class="menu-item-has-children"', $item_output);
            $item_output = str_replace('</a>', '<i class="icon-chevron-left text-11 mr-10"></i></a>', $item_output);
        }

// بررسی مگا منو
        if (in_array('menu-item-has-children', $item->classes) && in_array('has-mega-menu', $item->classes)) {
            $item_output = str_replace('<li', '<li class="menu-item-has-children -has-mega-menu"', $item_output);
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

// پایان هر آیتم منو
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
