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
    <img class="gallery-wave" src="<?php bloginfo('template_directory') ?>/assets/images/gallery_wave.png" />
    <div class="information-container">
        <h2><?php the_field('title'); ?></h2>
        <p><?php the_field('text'); ?></p>
        <p>Låt dig inspireras av historia och nutid på vår <a href="https://www.instagram.com/gathenhielmska_huset/">Instagram</a> eller <a href="https://www.facebook.com/">Facebook</a>.</p>
        <div class="illustration-bird-container">
            <img class="illustration-bird" src="<?php bloginfo('template_directory') ?>/assets/images/illustration_bird.png" alt="An illustration of a bird"/>
        </div>
    </div>
</main>
<?php get_footer(); ?>
