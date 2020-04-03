<?php

declare(strict_types=1);

add_action('init', function () {
    register_extended_post_type('manager', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Manager'),
            'edit_item' => __('Edit Manager'),
            'name' => __('Managers'),
            'search_items' => __('Search Managers'),
            'singular_name' => __('Manager'),
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
