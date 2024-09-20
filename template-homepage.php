<?php
/*
Template Name: Homepage
*/

get_header();
?>

<main id="main-content">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/homepage', 'hero'); ?>

    <?php get_template_part('template-parts/homepage', 'about'); ?>

    <?php get_template_part('template-parts/homepage', 'why-choose-us'); ?>

    <?php get_template_part('template-parts/homepage', 'services'); ?>

    <?php get_template_part('template-parts/homepage', 'testimonials'); ?>

    <?php get_template_part('template-parts/homepage', 'info'); ?>

    <?php get_template_part('template-parts/homepage', 'locations'); ?>

</main>

<?php get_footer(); ?>
