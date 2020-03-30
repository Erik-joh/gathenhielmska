<?php get_header(); ?>
<main class="front-page">
    <?php
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
                    <button class="news-arrow"></button>
                </div>
                <p class="news-content"><?php the_content(); ?></p>
            </div>

        <?php endforeach; ?>
    </div><!-- /row -->

</main>
<?php get_footer(); ?>
