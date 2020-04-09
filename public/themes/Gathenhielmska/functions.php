<?php

declare(strict_types=1);

// Register plugin helpers.
require get_theme_file_path('includes/plugins/plate.php');

require __DIR__ . '/plate.php';

require get_template_directory() . '/post-types/event.php';
require get_template_directory() . '/post-types/news.php';
require get_template_directory() . '/post-types/manager.php';
require get_template_directory() . '/post-types/occupation.php';
require get_template_directory() . '/post-types/timeline-post.php';

require get_template_directory() . '/post-types/manager.php';



require get_template_directory() . '/post-types/room.php';


require get_template_directory() . '/fields/event.php';
require get_template_directory() . '/fields/front-page.php';
require get_template_directory() . '/fields/about.php';
require get_template_directory() . '/fields/occupation.php';
require get_template_directory() . '/fields/timeline.php';

require get_template_directory() . '/fields/contact.php';
require get_template_directory() . '/fields/room.php';
require get_template_directory() . '/fields/manager.php';


require get_template_directory() . '/taxonomies/category.php';


// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Register navigation menus.
    register_nav_menus([
        'navigation' => __('Navigation', 'gathenhielmska'),
    ]);
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/styles/app.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/scripts/app.js', [], false, true);
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Lato:wght@700&display=swap');
});
