<?php /* Template Name: Events */ ?>

<?php

if ($_GET) {

    $categoryId = $_GET['category'];

} else {

    $categoryId = '';
}

$args = [
    'numberposts' => -1,
    'post_type' => 'event',
    'cat' => $categoryId,
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order'    => 'ASC'
];
$events = get_posts($args);

$terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));

?>

<?php get_header(); ?>

<main class="event-page">
    <div class="hero-container">
        <picture>
            <source srcset="<?php the_field('hero_image_desktop') ?>" media="(min-width: 800px)" />
            <img class="hero-img" src="<?php the_field('hero_image_mobile') ?>" loading="lazy" alt="">
        </picture>
        <h1><?php the_field('hero_title') ?></h1>
    </div>

    <div class="event-container">
        <?php if (count($events)) : ?>

            <div class="filter-container">
                <select class="select" id="year">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
                <select class="select" id="month">
                    <option value="">APRIL</option>
                    <option value="">MAJ</option>
                    <option value="">JUNI</option>
                    <option value="">JULI</option>
                </select>
                <select class="select" id="cat">
                    <option value="">KATEGORI</option>
                    <?php foreach ($terms as $term) : ?>
                        <option value="<?php echo $term->term_id; ?>">
                            <?php echo get_field('title', $term)  ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="event-cards">
            <?php foreach ($events as $post) : ?>
                <a href="<?php echo get_permalink($post); ?>">
                    <div class="event-card">
                        <!-- <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?> -->
                         <img class="hero-img" src="<?php the_field('hero_image') ?>" />
                        <div class="fields">
                            <div class="cat-date-container">
                                <?php $categories = get_the_terms($post, 'category');  ?>
                                <?php
                                    setlocale(LC_TIME,'sv_SE');
                                    $date = get_field('date');
                                    $date_string = strftime('%A %e %B', strtotime($date));
                                    $currentDate = date("Y-m-d");
                                    ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <p class="event-category"> <?php echo strtr(strtoupper($category->name), "åäö", "ÅÄÖ");  ?></p>
                                    <?php endforeach; ?>
                                    <p>|</p>
                                    <!-- <?php var_dump($currentDate) ?> -->
                                    <p class="event-date"><?php the_field('date'); ?></p>
                                    <?php if (get_field('online_event')) : ?>
                                        <div class="online-event">
                                            <p>Online</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <h3 class="event-title"><?php the_title(); ?></h3>
                                <p class="event-info"><?php the_field('short_description'); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Det finns tyvärr inga evenemang i denna kategori ännu.</p>
            <?php endif; ?>
            </div>
    </div>

</main>
<?php get_footer(); ?>
