<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<main class="contact-page">
    <img class="hero-img" src="<?php the_field('hero_image') ?>" />
    <h1><?php the_title(); ?></h1>
    <h3><?php the_field('title'); ?></h3>
    <p><?php the_field('text'); ?></p>
    <h4><?php the_field('title_2') ?></h4>
    <p><?php the_field('mail') ?></p>

    <div>
        <h2>Ledningen</h2>
        <!-- Loopa igenom en post-type med kontaktpersoner här? -->
    </div>

    <div>
        <h2>Vill du anordna ett event?</h2>
        <p>Är du intresserad av att arrangera kreativa möten mellan människor som
            älskar kultur? I Gathenhielmska huset har du möjlighet att låta din kreativitet
            flöda i någon av dess stora salar eller vackra trädgård. Lämna en intresseanmälan nedan!</p>
    </div>
</main>
<?php get_footer(); ?>
