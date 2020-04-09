<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

    <main class="contact-page">
        <img class="hero-img" src="<?php the_field('hero_image') ?>" />
        <h1><?php the_title(); ?></h1>
        <h3><?php the_field('title'); ?></h3>
        <p><?php the_field('text'); ?></p>
        <h4><?php the_field('title_2') ?></h4>
        <p><?php the_field('mail') ?></p>

    <?php $args = ['post_type' => 'manager'];
    $managers = get_posts($args); ?>
        <?php if (count($managers)) : ?>
            <div class="manager-container">
                <h2>Ledningen</h2>
                <?php foreach ($managers as $post) : ?>
                    <div class="managers">
                        <img src="<?php the_field('profile_image'); ?>" alt="">
                        <ul>
                            <li><?php the_field('full_name'); ?></li>
                            <li><?php the_field('role'); ?></li>
                            <li><?php the_field('email'); ?></li>
                            <li><?php the_field('phone_number'); ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="bookings-container">
<!-- FUNGERAR TYP? -->
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div>
                        <h2><?php the_field('title_3'); ?></h2>
                        <p><?php the_field('text_3'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<!-- FUNGERAR TYP? -->
            <h3>Våra lokaler</h3>
            <?php $args = ['post_type' => 'room', 'orderby' => 'date', 'order' => 'ASC'];
            $room = get_posts($args); ?>
                <?php if (count($room)) : ?>
                    <div class="">
                        <?php foreach ($room as $post) : ?>
                            <div class="">
                                <h4><?php the_field('title'); ?></h4>
                                <p><?php the_field('description'); ?></p>
                                <small><?php the_field('capacity'); ?></small>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

<!-- Kontaktformulär -->
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <h3>Intresseanmälan</h3>
                    <div class="contact-container">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>
