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

    <div>
        <h2>Vill du anordna ett event?</h2>
        <p>Är du intresserad av att arrangera kreativa möten mellan människor som
            älskar kultur? I Gathenhielmska huset har du möjlighet att låta din kreativitet
            flöda i någon av dess stora salar eller vackra trädgård. Lämna en intresseanmälan nedan!</p>
            <!-- Något formulär här -->
    </div>
</main>
<?php get_footer(); ?>
