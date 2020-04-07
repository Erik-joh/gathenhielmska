<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<main class="about-page">
    <img class="hero-img" src="<?php the_field('hero_image') ?>" />
    <h1><?php the_field('hero_title') ?></h1>
    <div class="paragraph-1-container">
        <h3><?php the_field('subheading_1') ?></h3>
        <p><?php the_field('paragraph_1') ?></p>
    </div>
    <div class="paragraph-2-container">
        <h3><?php the_field('subheading_2') ?></h3>
        <p><?php the_field('paragraph_2') ?></p>
    </div>
    <div>
        <h2>Historisk tidslinje</h2>
        <div class="timeline-container">
            <?php
            $args = [
                'post_type' => 'timeline-post'
            ];

            $posts = get_posts($args);
            ?>
            <div class="year-container">
                <?php foreach ($posts as $post) : ?>
                    <h4><?php the_field('year') ?></h4>
                <?php endforeach; ?>
            </div>
            <div class="timeline"></div>
            <div class="description-container">
                <?php foreach ($posts as $post) : ?>
                    <p><?php the_field('description') ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="occupations-container">
        <h2><?php the_field('occupations_heading') ?></h2>
        <p><?php the_field('occupations_paragraph') ?></p>

        <div>
            <?php
            $args = [
                'numberposts' => 4,
                'post_type' => 'occupation',
            ];

            $occupations = get_posts($args);
            ?>
            <?php foreach ($occupations as $post) : ?>
                <p><?php the_field('occupation') ?></p>
                <h1><?php the_field('name') ?></h1>
                <?php if (get_field('link_to_website')) : ?>
                    <a href="<?php the_field('link_to_website') ?>">
                        <?php the_field('link_to_website') ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

</main>
<?php get_footer(); ?>
