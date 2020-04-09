<?php get_header(); ?>

<?php
setlocale(LC_TIME,'sv_SE');

$date = get_field('date');
$date_string = strftime('%A %e %B', strtotime($date));

// $date = DateTime::createFromFormat('Y-m-d', $date_string);
// $newDateFormat = $date->format('l j F');
?>

<div class="single-event-container">
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
                    <?php $categories = get_the_terms($post, 'category');  ?>

                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo get_term_link($category) ?>"> <?php echo strtoupper($category->name) ?></a>
                    <?php endforeach; ?>
                    <p>|</p>
                    <p class="event-date"><?php echo $date; ?></p>
                </div>

                <h1><?php the_title(); ?></h1>
                <p><?php the_field('short_description'); ?></p>

                <h2><?php the_field('title_1'); ?></h2>
                <p><?php the_field('text_1'); ?></p>

                <h2><?php the_field('title_2'); ?></h2>
                <p><?php the_field('text_2'); ?></p>


            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<!-- Information Section -->
<div class="event-info-container">
    <img class="info-top-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_top.png" />
        <h1>Information om evenemanget</h1>
        <ul>
            <li><p class="event-date"><?php echo $date_string; ?></li>
            <li><p class="event-date"><?php the_field('time_event_start'); ?>-<?php the_field('time_event_end'); ?></li>
            <li><p class="event-date"><?php the_field('ticket_price'); ?></li>
            <li><p class="event-date"><?php the_field('location') ?></li>
        </ul>
        <p><?php the_field('optional_info'); ?></p>
        <div class="btn-container">
            <button>Köp biljett</button>
        </div>
    <img class="info-bottom-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_bottom.png" />
</div>

<!-- Gallery Section -->
    <div class="gallery-container">
        <h1>Bildgalleri</h1>
        <div class=""></div>
    </div>

</div> <!-- single-event-container -->
<?php get_footer(); ?>
