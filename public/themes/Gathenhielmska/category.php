<?php get_header(); ?>

<!-- WORK IN PROGRESS.... -->

<h1>Categories</h1>

<?php

$terms = get_terms( 'category' );

foreach ( $terms as $term ) {
    $terms_query = new WP_Query( array(
        'post_type' => 'event',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array( $term->slug ),
                'operator' => 'IN'
            )
        )
    ) );
?>

<h3><?php echo $term->name; ?></h3>

    <?php if ($terms_query->have_posts()) : ?>
        <?php while ($terms_query->have_posts()): $terms_query->the_post(); ?>
            <div class="">
                <li><?php echo the_title(); ?></li>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php

// Reset things, for good measure
$terms_query = null;
wp_reset_postdata();

}

?>

<?php get_footer(); ?>
