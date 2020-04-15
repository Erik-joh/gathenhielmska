<?php get_header(); ?>

<?php
$terms = get_terms('category');

$id = get_queried_object()->term_id;
$name = get_queried_object()->name;

// var_dump($name);

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

// var_dump($id);

// foreach ($terms as $category) {
//     var_dump($category->name);
// }
// ?>

<main class="category-page">
    <div class="category-name">
        <h4><?php echo $name; ?></h4>
    </div>

    <?php if ($terms_query->have_posts()) : ?>
        <?php while ($terms_query->have_posts()) : $terms_query->the_post(); ?>
            <div class="event-container">
                <a href="<?php echo get_permalink($post); ?>">
                    <div class="event-cards">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?>
                        <div class="fields">
                            <div class="cat-date-container">
                                <p class="event-date"><?php the_field('date'); ?></p>
                            </div>
                            <h3 class="event-title"><?php the_title(); ?></h3>
                            <p class="event-info"><?php the_field('short_description'); ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Det finns tyvärr inga evenemang i denna kategori ännu.</p>
    <?php endif; ?>
</main>

<?php
$terms_query = null;
wp_reset_postdata();
?>

<?php get_footer(); ?>
