<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<main class="front-page">
    <?php //$page = acf_get_field_group('group_5e85ba0a2d36e')
    ?>
    <img src="<?php the_field('hero_image') ?>" />
    <h2><?php the_field('hero_title') ?></h2>

    <?php
    //Events Section
    $args = [
        'numberposts' => 3,
        'post_type' => 'event',
        'orderby' => 'date'
    ];

    $events = get_posts($args);
    ?>

    <?php if (count($events)) : ?>
        <div class="front-event-container">
            <h1>Kommande evengemang</h1>

            <div class="front-event-cards-container">
                <?php foreach ($events as $post) : ?>
                    <div class="front-event-cards">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail([163, 190]);
                        } ?>
                        <div class="front-event-fields">

                            <p class="front-event-date"><?php the_field('date'); ?></p>
                            <a href="<?php echo get_permalink($post); ?>">
                                <p class="front-event-title"><?php the_title(); ?></p>
                            </a>
                            <p class="front-event-info"><?php the_field('description'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button>
                <a href="<?php echo get_permalink(get_page_by_title("events")); ?>">Se fler evengemang</a>
            </button>

        </div>
    <?php endif; ?>

    <?php
    //News Section
    $args = [
        'numberposts' => 4,
        'orderby' => 'date',
        'post_type' => 'news'
    ];
    $latestPosts = get_posts($args);
    ?>
    <div class="news-container">
        <img class="news-top-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_top.png" />
        <h1>Nyheter</h1>
        <?php foreach ($latestPosts as $post) : setup_postdata($post);  ?>

            <div class="news-article">
                <div class="news-article-top">
                    <h2 class="news-title"><?php the_title(); ?></h2>
                    <img class="news-arrow" src="<?php bloginfo('template_directory') ?>/assets/images/news_arrow.png" />
                </div>
                <!-- <p class=" news-content"></p> -->
                <?php the_content(); ?>
            </div>

        <?php endforeach; ?>
        <img class="news-bottom-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_bottom.png" />
    </div><!-- /row -->

</main>
<?php get_footer(); ?>
