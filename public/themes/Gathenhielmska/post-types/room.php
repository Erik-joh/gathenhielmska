<?php

declare(strict_types=1);

add_action('init', function () {
    register_extended_post_type('room', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Room'),
            'edit_item' => __('Edit Room'),
            'name' => __('Rooms'),
            'search_items' => __('Search Rooms'),
            'singular_name' => __('Room'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-location',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
