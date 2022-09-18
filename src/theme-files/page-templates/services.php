<?php
/*
 * Template Name: Services
 * Services page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="services_page">
    <?php $section_1 = get_field('section_1'); ?>
    <section class="section_1">
        <div class="container">
            <div class="text-capitalize text-secondary fw-900 letter-spacing-n23 fs-2 line-height-1"><?= $section_1['title'] ?></div>
            <div class="text-light-grey letter-spacing-n074 fs-20 fw-500 line-height-2 pt-4"><?= $section_1['subtitle'] ?></div>
        </div>
    </section>
    <img src="<?= get_template_directory_uri() ?>/images/lib/solar-services.jpg" class="w-100" alt="Solar Services">
    <section class="section_2"></section>
    <section class="brands_wrapper">
        <?php get_template_part('parts/section', 'brands'); ?>
    </section>
</div>

<?php get_footer(); ?>