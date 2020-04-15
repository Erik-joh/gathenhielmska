<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="hero">
            <div class="hero-img"><?php the_content(); ?></div>
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$args = [
    'numberposts' => -1,
    'post_type' => 'event',
    'meta_key' => 'date',
    'orderby' => 'meta_value',
    'order'	=> 'ASC'
];
$events = get_posts($args);

$terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
));
?>

<?php if (count($events)) : ?>
    <div class="event-container">

        <div class="category-list">
            <ul>
                <?php foreach ($terms as $term) : ?>
                    <li>
                        <a href="<?php echo get_term_link($term) ?> ">
                            <?php echo get_field('title', $term)  ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <?php foreach ($events as $post) : ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } ?>
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
                                <a href="<?php echo get_term_link($category) ?>"> <?php echo strtoupper($category->name) ?></a>
                            <?php endforeach; ?>
                            <p>|</p>
                            <!-- <?php var_dump($currentDate) ?> -->
                            <p class="event-date"><?php the_field('date'); ?></p>
                            <?php if ( get_field('online_event') ) : ?>
                                <div class="online-event"><p>Online</p></div>
                            <?php endif; ?>
                        </div>
                        <h3 class="event-title"><?php the_title(); ?></h3>
                        <p class="event-info"><?php the_field('short_description'); ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
