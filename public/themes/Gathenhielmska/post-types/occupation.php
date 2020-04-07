<?php

declare(strict_types=1);

add_action('init', function () {
    register_extended_post_type('occupation', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Occupation'),
            'edit_item' => __('Edit Occupation'),
            'name' => __('Occupations'),
            'search_items' => __('Search Occupations'),
            'singular_name' => __('Occupation'),
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
