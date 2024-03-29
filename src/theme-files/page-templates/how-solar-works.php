<?php
/*
 * Template Name: How Solar Works
 * How Solar Works page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="howSolarWorks_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <img src="<?= get_template_directory_uri() ?>/images/lib/sunpass-passport.png" alt="Sunpass Passport" class="sunpass_passport">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="heading fs-73 letter-spacing-n23 fw-700"><?= $section_1['title'] ?></div>
                    <div class="row pt-4 pt-lg-5">
                        <?php if (isset($section_1['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_1']['url'] ?>" class="btn bordered border-white text-white px-4 px-xl-5"><?= $section_1['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_1['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_2']['url'] ?>" class="btn btn-white text-secondary px-4 px-xl-5"><?= $section_1['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col col-xl-6 col-xxl-7 description" data-aos="fade-left">
                    <?= $section_1['description'] ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <div class="section_2_1">
            <?php $section_2 = get_field('section_2'); ?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6" data-aos="fade-right">
                        <div class="heading fs-80 text-dark letter-spacing-n212 fw-700"><?= $section_2['title'] ?></div>
                        <div class="description">
                            <?= $section_2['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="faq_wrapper">
            <?php get_template_part('parts/section', 'faq'); ?>
        </div>
    </section>

    <section class="section_3">
        <div class="section_3_1">
            <?php $section_3 = get_field('section_3'); ?>
            <div class="container">
                <div class="heading fs-80 text-orange fw-900" data-aos="fade-up"><?= $section_3['title'] ?></div>
                <div class="row gx-xl-8 gy-5 gy-md-0">
                    <div class="col-12 col-md col-lg-5 col-xl-auto" data-aos="fade-right">
                        <img src="<?= $section_3['image']['url'] ?>" alt="<?= $section_3['image']['url'] ?>" class="w-100">
                    </div>
                    <div class="col description" data-aos="fade-left"><?= $section_3['description'] ?></div>
                </div>
            </div>
        </div>
        <div class="brands_wrapper text-light-grey">
            <?php get_template_part('parts/section', 'brands'); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>