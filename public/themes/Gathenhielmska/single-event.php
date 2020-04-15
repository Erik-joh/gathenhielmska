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

            <div class="hej">
                <div class="cat-date-container">
                    <?php $categories = get_the_terms($post, 'category');  ?>

                    <?php foreach ($categories as $category) : ?>
                        <a href="<?php echo get_term_link($category) ?>"> <?php echo strtoupper($category->name) ?></a>
                    <?php endforeach; ?>
                    <p>|</p>
                    <p class="event-date"><?php echo $date; ?></p>
                    <?php if ( get_field('online_event') ) : ?>
                        <div class="online-event"><p>Online</p></div>
                    <?php endif; ?>
                </div>

                <h1 class="title"><?php the_title(); ?></h1>
                <p><?php the_field('short_description'); ?></p>

                <h4><?php the_field('title_1'); ?></h4>
                <p><?php the_field('text_1'); ?></p>

                <h4><?php the_field('title_2'); ?></h4>
                <p><?php the_field('text_2'); ?></p>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<!-- Information Section -->
<div class="event-info-container">
    <img class="info-top-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_top.png" />
        <div class="event-info-wrapper">
            <h3>Information om evenemanget</h3>
            <ul>
                <li>
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/icon_calender.svg">
                    <p class="event-date"><?php echo $date_string; ?></p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/icon_clock.svg">
                    <p class="event-date"><?php the_field('time_event_start'); ?>-<?php the_field('time_event_end'); ?></p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/icon_money.svg">
                    <p class="event-date"><?php the_field('ticket_price'); ?></p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/icon_house.svg">
                    <?php if ( get_field('online_event') ) : ?>
                        <p class="event-date">Livestream på Facebook</p>
                    <?php else: ?>
                        <p class="event-date"><?php the_field('location') ?></p>
                    <?php endif; ?>
                </li>
            </ul>
            <div class="optional-info">
                <?php if ( get_field('online_event') ) : ?>
                    <p>Gathenhielmska huset erbjuder livesändning av evenemang via Facebook och Youtube. Vi anordnar livestream och virtuella konserter direkt från Trädgården och Salongen.</p>
                    <br><p>Ta del av kreativa möten hemifrån!</p>
                    <br><p>Klicka på knappen för att se sändningen.</p>
                <?php else: ?>
                    <?php if (get_field('optional_info')): ?>
                        <p><?php the_field('optional_info'); ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="btn-container">
                <?php if ( get_field('online_event') ) : ?>
                    <a class="link-button" href="https://www.facebook.com/">Till livestream</a>
                <?php else: ?>
                    <a class="link-button" href="https://billetto.se/">Köp biljett</a>
                <?php endif; ?>
            </div>
        </div>
    <img class="info-bottom-img" src="<?php bloginfo('template_directory') ?>/assets/images/wave_news_bottom.png" />
</div>

<!-- Gallery Section -->
<div class="gallery-section">

    <?php if( have_rows('images') ): ?>
        <?php while( have_rows('images') ): the_row();

$images = get_field('images');

// Get sub field values.
// $image1 = get_sub_field('image_1');
// $image2 = get_sub_field('image_2');
?>
<h3>Bildgalleri</h3>
        <div class="gallery-container">
            <?php foreach ($images as $image) : ?>
                <div class="gallery-images">
                    <img src="<?php echo $image; ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="scroll-highlight-container"></div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

</div> <!-- single-event-container -->
<?php get_footer(); ?>
