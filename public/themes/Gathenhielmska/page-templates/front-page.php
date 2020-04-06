<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<main class="front-page">
    <?php //$page = acf_get_field_group('group_5e85ba0a2d36e')
    ?>
    <img class="hero-img" src="<?php the_field('hero_image') ?>" />
    <h1><?php the_field('hero_title') ?></h1>


    <?php
    //Events Section
    $args = [
        'numberposts' => 6,
        'post_type' => 'event',
        'orderby' => 'date'
    ];

    $events = get_posts($args);
    ?>

    <?php if (count($events)) : ?>
        <div class="front-event-container">
            <h2>Kommande evengemang</h2>

            <div class="front-event-cards-container" id="scrollX">
                <?php foreach ($events as $post) : ?>
                    <div class="front-event-cards scrollable">
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
            <div class="scroll-highlight-container"></div>

            <a class="link-button" href="<?php echo get_permalink(get_page_by_title("evenemang")); ?>">Se fler evenemang</a>


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
        <h2>Nyheter</h2>
        <?php foreach ($latestPosts as $post) : setup_postdata($post);  ?>

            <div class="news-article">
                <div class="news-article-top">
                    <h4 class="news-title"><?php the_title(); ?></h4>
                    <img class="news-arrow" src="<?php bloginfo('template_directory') ?>/assets/images/news_arrow.png" />
                </div>
                <!-- <p class=" news-content"></p> -->
                <?php the_content(); ?>
            </div>

        <?php endforeach; ?>
        <img class="news-bottom-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_bottom.png" />
    </div><!-- /row -->


    <div class="visit-us">
        <h2>Vill du besöka oss?</h2>
        <p>Vi på Gathenhielmska huset vill gärna öppna upp för er så mycket som möjligt, vi har guidade turer och flera olika evenemang där vi öppnar dörrarna för er!</p>
        <br>
        <p>Håll utkik på kommande evenemang här, på
            <a> Facebook </a>
            eller på
            <a> Instagram </a>
            för nästa tillfälle.
        </p>
        <img class="map" src="<?php bloginfo('template_directory') ?>/assets/images/map.png" />
        <a class="link-button" href="<?php echo get_permalink(get_page_by_title("evenemang")); ?>">Se evenemang</a>
    </div>


</main>
<?php get_footer(); ?>
