<?php
/*
 * Template Name: Benefits of Solar
 * Benefits of Solar page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="benefitsOfSolar_page">
    <div class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col py-5">
                    <div class="heading fs-11 letter-spacing-n23 text-orange fw-700 line-height-8"><?= $section_1['title'] ?></div>
                    <div class="letter-spacing-n066 text-light-grey fs-20 line-height-9 py-5"><?= $section_1['description'] ?></div>
                    <div class="row">
                        <?php if (isset($section_1['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_1']['url'] ?>" class="btn bordered border-secondary text-secondary px-4 px-xxl-5"><?= $section_1['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_1['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_2']['url'] ?>" class="btn btn-secondary text-white px-4 px-xxl-5"><?= $section_1['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-auto">
                    <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>" class="w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="fs-8 heading"><?= $section_2['hero_heading'] ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>