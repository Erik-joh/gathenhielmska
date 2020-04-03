<?php get_header(); ?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="event-container">
                <p>It's working!</p>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Sorry...</p>
    <?php endif; ?>
<?php get_footer(); ?>
