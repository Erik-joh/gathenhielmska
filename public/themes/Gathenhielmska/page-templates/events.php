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
        <div>
            <?php wp_list_categories('feed_type'); ?>
        </div>
        <?php foreach ($events as $post) : ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
                    <div class="fields">
                        <div class="cat-date-container">
                            <?php $categories = get_the_terms($post, 'category');  ?>
                            <?php foreach ($categories as $category) : ?>
                                <a class="event-date" href="<?php echo get_term_link($category) ?>"> <?php echo strtoupper($category->name) ?></a>
                            <?php endforeach; ?>
                            <p>|</p>
                            <p class="event-date"><?php the_field('date'); ?></p>
                        </div>
                        <p class="event-title"><?php the_title(); ?></p>
                        <p class="event-info"><?php the_field('description'); ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
