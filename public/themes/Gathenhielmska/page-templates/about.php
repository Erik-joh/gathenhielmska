<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<main class="about-page">

    <picture>
        <source srcset="<?php the_field('hero_image_desktop') ?>" media="(min-width: 800px)" />
        <img class="hero-img" src="<?php the_field('hero_image_mobile') ?>" loading="lazy" alt="">
    </picture>
    <h1 class="hero-title"><?php the_field('hero_title') ?></h1>

    <div class="paragraph-bird-container">
        <div class="paragraph-container">
            <h3><?php the_field('subheading_1') ?></h3>
            <p><?php the_field('paragraph_1') ?></p>
        </div>

        <div class="illustration-bird-flower">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/about-page/illustration_bird_flower.png" />
        </div>
    </div>
    <div class="paragraph-container">
        <h3><?php the_field('subheading_2') ?></h3>
        <p><?php the_field('paragraph_2') ?></p>
    </div>


    <img class="illustration-bird" src="<?php bloginfo('template_directory') ?>/assets/images/about-page/illustration_bird.png" />
    <div class="timeline-section">
        <img class="wave-top" src="<?php bloginfo('template_directory') ?>/assets/images/about-page/wave_timeline_top.png" />
        <h2>Historisk tidslinje</h2>
        <div class="timeline-container">
            <?php
            $args = [
                'post_type' => 'timeline-post',
                'numberposts' => -1,
                'order' => 'ASC'
            ];

            $posts = get_posts($args);
            ?>

            <?php foreach ($posts as $post) : ?>
                <div class="year-container">
                    <h4><?php the_field('year') ?></h4>
                    <div class="year-line-left"></div>
                    <div class="year-line-right"></div>
                    <p><?php the_field('description') ?></p>
                </div>
            <?php endforeach; ?>
            <div class="timeline">
                <div></div>
            </div>
        </div>
        <img class="wave-bottom" src="<?php bloginfo('template_directory') ?>/assets/images/about-page/wave_timeline_bottom.png" />
    </div>

    <div class="occupations-container">
        <?php
        $post = get_post(12);
        ?>

        <h2><?php the_field('occupations_heading') ?></h2>
        <p><?php the_field('occupations_paragraph') ?></p>

        <div>
            <?php
            $args = [
                'numberposts' => -1,
                'post_type' => 'occupation',
            ];

            $occupations = get_posts($args);
            ?>
            <?php foreach ($occupations as $post) : ?>
                <div class="occupation-card">
                    <p><?php the_field('occupation') ?></p>
                    <h1><?php the_field('name') ?></h1>
                    <?php if (get_field('link_to_website')) : ?>
                        <a href="<?php the_field('link_to_website') ?>">
                            <?php the_field('link_to_website') ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>
<?php get_footer(); ?>
