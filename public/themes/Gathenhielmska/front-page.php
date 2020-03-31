<?php get_header(); ?>
<main class="front-page">
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
        <div class="event-container">
            <h1>Kommande evengemang</h1>

            <div class="event-cards-container">
                <?php foreach ($events as $post) : ?>
                    <div class="event-cards">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail([163, 190]);
                        } ?>
                        <div class="event-fields">

                            <p class="event-date"><?php the_field('date'); ?></p>
                            <a href="<?php echo get_permalink($post); ?>">
                                <p class="event-title"><?php the_title(); ?></p>
                            </a>
                            <p class="event-info"><?php the_field('description'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <button>Se fler evengemang</button>
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
        <h1>Nyheter</h1>
        <?php foreach ($latestPosts as $post) : setup_postdata($post);  ?>

            <div class="news-article">
                <div class="news-article-top">
                    <h2 class="news-title"><?php the_title(); ?></h2>
                    <img class="news-arrow" src="<?php echo __DIR__ . "/assets/images/news_arrow.png"; ?>" />
                </div>
                <!-- <p class="news-content"></p> -->
                <?php the_content(); ?>
            </div>

        <?php endforeach; ?>
    </div><!-- /row -->

</main>
<?php get_footer(); ?>
