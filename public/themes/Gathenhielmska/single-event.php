<?php get_header(); ?>

<div class="">
    <div class="">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="hero">
                    <div class="hero-img"><?php if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            } ?>
                    </div>
                </div>

                <div class="cat-date-container">
                    <?php $categories = get_the_terms($post, 'category')  ?>

                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo get_term_link($category); ?>"> <?php echo strtoupper($category->name) ?></a>
                    <?php endforeach; ?>
                    <p>|</p>
                    <p class="event-date"><?php the_field('date'); ?></p>
                </div>

                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <!-- Information Section -->

    <div class="event-info-container">
        <h1>Information om evenemanget</h1>
            <div class="">
                <ul>
                    <li><p class="event-date"><?php the_field('date'); ?></li>
                    <li><p class="event-date">20:00</li>
                    <li><p class="event-date">Fri entre</li>
                    <li><p class="event-date">Stigbergstorget 7</li>
                </ul>
            </div>
        <div class="btn-container">
            <button>Köp biljett</button>
        </div>
    </div>

<?php get_footer(); ?>
