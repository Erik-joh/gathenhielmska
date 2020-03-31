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

<?php
    $args = [
        'numberposts' => 5,
        'post_type' => 'event',
    ];

    $events = get_posts($args);
?>

<?php if(count($events)): ?>
    <div class="event-container">
        <?php foreach ($events as $post): ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <div class="fields">
                    <?php get_field('event_info'); ?>
                        <p class="event-date"><?php the_field('date'); ?></p>
                        <p class="event-title"><?php the_title(); ?></p>
                        <p class="event-info"><?php the_field('description'); ?></p>
                        <p><?php the_field('category'); ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
