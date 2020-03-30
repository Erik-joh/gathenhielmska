<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()): the_post(); ?>

    <div class="hero">
        <div class="hero-img"><?php the_content(); ?></div>
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
