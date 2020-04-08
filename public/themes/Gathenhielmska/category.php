<?php get_header(); ?>

<?php
$terms = get_terms('category');

$id = get_queried_object()->term_id;

$terms_query = new WP_Query(array(
    'post_type' => 'event',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => array($id),
            'operator' => 'IN'
        )
    )
));
?>

<?php if ($terms_query->have_posts()) : ?>
    <?php while ($terms_query->have_posts()) : $terms_query->the_post(); ?>
        <div class="event-container">
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
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$terms_query = null;
wp_reset_postdata();
?>

<?php get_footer(); ?>
