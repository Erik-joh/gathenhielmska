<?php get_header(); ?>

<div class="">
    <div class="">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <?php $categories = get_the_terms($post, 'category')  ?>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo get_term_link($category); ?>"> <?php echo $category->name ?></a>
                <?php endforeach; ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
