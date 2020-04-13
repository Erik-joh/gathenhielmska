<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

    <main class="contact-page">
        <img class="hero-img" src="<?php the_field('hero_image') ?>" />

        <div class="hej">
            <h1 class="hero-title"><?php the_title(); ?></h1>
            <h3><?php the_field('title'); ?></h3>
            <p><?php the_field('text'); ?></p>
            <h4><?php the_field('title_2') ?></h4>
            <p><?php the_field('mail') ?></p>
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
                            <li><?php the_field('full_name'); ?></li>
                            <li><?php the_field('role'); ?></li>
                            <li><?php the_field('email'); ?></li>
                            <li><?php the_field('phone_number'); ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>



        <div class="booking-section">
            <img class="contact-wave" src="<?php bloginfo('template_directory') ?>/assets/images/contact_wave.png" />
            <img class="illustration-flower" src="<?php bloginfo('template_directory') ?>/assets/images/illustration_flower.png" alt="An illustration of a flower"/>

        <div class="bookings-container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div>
                        <h2><?php the_field('title_3'); ?></h2>
                        <p><?php the_field('text_3'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
<?php $args = ['post_type' => 'room', 'orderby' => 'date', 'order' => 'ASC'];
            $room = get_posts($args); ?>
                <?php if (count($room)) : ?>
                    <div class="room-container">
                        <h3>Våra lokaler</h3>
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
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
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
