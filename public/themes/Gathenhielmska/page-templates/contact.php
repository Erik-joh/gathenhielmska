<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<main class="contact-page">
    <picture>
        <source srcset="<?php the_field('hero_image_desktop') ?>" media="(min-width: 800px)" />
        <img class="hero-img" src="<?php the_field('hero_image_mobile') ?>" loading="lazy" alt="">
    </picture>

    <div class="contact-information">
        <h1 class="hero-title"><?php the_title(); ?></h1>
        <h3><?php the_field('title'); ?></h3>
        <p><?php the_field('text'); ?></p>
        <h4><?php the_field('title_2') ?></h4>
        <p><a class="contact-underline" href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
    </div>

    <?php $args = ['post_type' => 'manager'];
    $managers = get_posts($args); ?>
    <?php if (count($managers)) : ?>
        <div class="manager-container">
            <h2>Ledningen</h2>
            <?php foreach ($managers as $post) : ?>
                <div class="managers">
                    <img src="<?php the_field('profile_image'); ?>" alt="">
                    <ul>
                        <li class="name"><?php the_field('full_name'); ?></li>
                        <li><?php the_field('role'); ?></li>
                        <li><a class="contact-underline" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
                        <li><a class="contact-underline" href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a></li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- <img class="illustration-flower" src="<?php bloginfo('template_directory') ?>/assets/images/illustration_flower.png" alt="An illustration of a flower" /> -->
    <div class="booking-section">
        <!-- <div class="wave-container">
            <img class="wave-top-img" src="<?php bloginfo('template_directory') ?>/assets/images/contact_wave.png" />
        </div> -->
        <div class="bookings-container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="booking-information">
                        <h2><?php the_field('title_3'); ?></h2>
                        <p><?php the_field('text_3'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php $args = ['post_type' => 'room', 'numberposts' => -1, 'orderby' => 'date', 'order' => 'ASC'];
            $room = get_posts($args); ?>
            <?php if (count($room)) : ?>
                <h3>Våra lokaler</h3>
                <div class="room-container">
                    <?php foreach ($room as $post) : ?>
                        <div class="room">
                            <h4><?php the_field('title'); ?></h4>
                            <p><?php the_field('description'); ?></p>
                            <div class="capacity">
                                <img src="<?php bloginfo('template_directory') ?>/assets/images/room_icon.svg">
                                <p><?php the_field('capacity'); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Kontaktformulär -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="contact-container">
                        <p><?php the_field('text_4'); ?></p>
                        <h3>Intresseanmälan</h3>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
