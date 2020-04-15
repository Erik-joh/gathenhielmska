<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="header-navbar">
            <div class="icon-container">
                <img class="menu-search" src="<?php bloginfo('template_directory') ?>/assets/images/header/icon_search_menu.svg">
                <a class="home-icon" href="/"><img class="menu-logo" src="<?php bloginfo('template_directory') ?>/assets/images/header/icon_logo_menu.svg" /></a>

                <input type="checkbox" class="toggler">
                <div class="hamburger">
                    <div></div>
                </div>
            </div>
            <div class="menu">
                <h2>Meny</h2>
                <div class="link-container">
                    <?php foreach (get_pages(['sort_column' => 'menu_order']) as $page) : ?>
                        <?php if ($page->post_title !== "Home") : ?>
                            <a class="link-page" href="<?php echo get_permalink($page); ?>">
                                <?php echo $page->post_title; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="language-header">
                        <img class="language-icon" src="<?php bloginfo('template_directory') ?>/assets/images/header/language_icon.png">
                        <h3>Språk</h3>
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/header/language_arrow.png">
                    </div>
                    <div class="language-selector">
                        <div>
                            <img class="english-icon" src="<?php bloginfo('template_directory') ?>/assets/images/header/UK.png">
                            <h3>English</h3>
                        </div>
                        <div>
                            <img class="german-icon" src="<?php bloginfo('template_directory') ?>/assets/images/header/germany.png">
                            <h3>German</h3>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </nav>

    </header>
