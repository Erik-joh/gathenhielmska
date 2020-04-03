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
                    <?php $categories = get_the_terms($post, 'category')  ?>

                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo get_term_link($category); ?>"> <?php echo strtoupper($category->name) ?></a>
                    <?php endforeach; ?>
                    <p>|</p>
                    <p class="event-date"><?php echo $date; ?></p>
                </div>

                <h1><?php the_field('title'); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<!-- Information Section -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <style> .wave { fill: currentColor; } </style>
        <path class="wave" fill="#f3f4f5" fill-opacity="1" d="M0,256L80,229.3C160,203,320,149,480,138.7C640,128,800,160,960,144C1120,128,1280,64,1360,32L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <div class="event-info-container">
        <h1>Information om evenemanget</h1>
        <ul>
            <li><p class="event-date"><?php echo $date_string; ?></li>
            <li><p class="event-date"><?php the_field('time_event_start'); ?>-<?php the_field('time_event_end'); ?></li>
            <li><p class="event-date"><?php the_field('ticket_price'); ?></li>
            <li><p class="event-date"><?php the_field('location') ?></li>
        </ul>
        <div class="btn-container">
            <button>Köp biljett</button>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <style> .wave { fill: currentColor; } </style>
        <path class="wave" fill="#f3f4f5" fill-opacity="1" d="M0,256L80,229.3C160,203,320,149,480,138.7C640,128,800,160,960,144C1120,128,1280,64,1360,32L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
    </svg>

<!-- Gallery Section -->
    <div class="gallery-container">
        <h1>Bildgalleri</h1>
        <div class=""></div>
    </div>

</div> <!-- single-event-container -->
<?php get_footer(); ?>
