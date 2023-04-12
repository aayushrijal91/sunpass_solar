<?php
/*
 * Template Name: Residential
 * Residential page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="residential_page">
    <section class="parts">
        <div class="part_1 text-light-grey">
            <?php get_template_part('parts/section', 'brands'); ?>
        </div>
        <div class="part_2">
            <?php get_template_part('parts/section', 'sustainability'); ?>
            <img src="<?= get_template_directory_uri() ?>/images/lib/globe-left.png" alt="Globe" class="globe-left">
        </div>
        <div class="part_3">
            <div class="container">
                <img src="<?= get_template_directory_uri() ?>/images/lib/solar-panel-demo.jpg" alt="Solar panel demo" class="w-100">
            </div>
        </div>
        <?php get_template_part('parts/section', 'faq'); ?>
    </section>
</div>

<?php get_footer(); ?>