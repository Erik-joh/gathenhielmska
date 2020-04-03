<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="hero">
            <div class="hero-img"><?php the_content(); ?></div>
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$args = [
    'numberposts' => 5,
    'post_type' => 'event',
];

$events = get_posts($args);
?>

<?php if (count($events)) : ?>
    <div class="event-container">
        <?php foreach ($events as $post) : ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                    <div class="fields">
                        <p class="event-date"><?php the_field('date'); ?></p>
                        <p class="event-title"><?php the_field('title'); ?></p>
                        <p class="event-info"><?php the_field('description'); ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
