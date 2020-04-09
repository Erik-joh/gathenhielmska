<?php /* Template Name: Gallery */ ?>

<?php get_header(); ?>
<main class="gallery-page">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1 class="hero-title"><?php the_title(); ?></h1>

            <div class="instagram-feed">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="information-container">
        <h2><?php the_field('title'); ?></h2>
        <p><?php the_field('text'); ?></p>
    </div>
</main>
<?php get_footer(); ?>
