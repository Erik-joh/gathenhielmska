<?php

declare(strict_types=1);

add_action('init', function () {
    register_extended_post_type('timeline-post', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Timeline Post'),
            'edit_item' => __('Edit Timeline Post'),
            'name' => __('Timeline Posts'),
            'search_items' => __('Search Timeline Posts'),
            'singular_name' => __('Timeline Post'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
