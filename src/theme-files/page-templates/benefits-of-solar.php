<?php
/*
 * Template Name: Benefits of Solar
 * Benefits of Solar page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="benefitsOfSolar_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col py-5" data-aos="fade-right">
                    <div class="heading fs-11 letter-spacing-n23 text-orange fw-700 line-height-8"><?= $section_1['title'] ?></div>
                    <div class="letter-spacing-n066 text-light-grey fs-20 line-height-9 py-5"><?= $section_1['description'] ?></div>
                    <div class="row">
                        <?php if (isset($section_1['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_1']['url'] ?>" class="btn bordered border-secondary text-secondary px-4 px-xl-5"><?= $section_1['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_1['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_2']['url'] ?>" class="btn btn-secondary text-white px-4 px-xl-5"><?= $section_1['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-auto" data-aos="fade-left">
                    <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="fs-8 heading"><?= $section_2['hero_heading'] ?></div>
            <div class="row gx-lg-5 gx-xl-6 gy-5 gy-md-6 gy-lg-0">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="text-orange fs-7 fw-700 letter-spacing-n23"><?= $section_2['column_1']['title'] ?></div>
                    <div class="description two-columns"><?= $section_2['column_1']['description'] ?></div>
                    <div class="row">
                        <?php if (isset($section_2['column_1']['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_2['column_1']['button_1']['url'] ?>" class="btn bordered border-orange text-orange px-4 px-xl-5"><?= $section_2['column_1']['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_2['column_1']['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_2['column_1']['button_2']['url'] ?>" class="btn btn-orange text-white px-4 px-xl-5"><?= $section_2['column_1']['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="text-orange fs-7 fw-700 letter-spacing-n23"><?= $section_2['column_2']['title'] ?></div>
                    <div class="description"><?= $section_2['column_2']['description'] ?></div>
                    <div class="row">
                        <?php if (isset($section_2['column_2']['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_2['column_2']['button_1']['url'] ?>" class="btn bordered border-orange text-orange px-4 px-xl-5"><?= $section_2['column_2']['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_2['column_2']['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_2['column_2']['button_2']['url'] ?>" class="btn btn-orange text-white px-4 px-xl-5"><?= $section_2['column_2']['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="section_3_1">
            <?php $section_3_1 = $section_3['section_3_1']; ?>
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-6 col-xl-5" data-aos="fade-right">
                        <div class="heading fs-5 letter-spacing-n23 text-orange fw-700 line-height-8"><?= $section_3_1['title'] ?></div>
                        <div class="row pt-4 pt-lg-5">
                            <?php if (isset($section_3_1['button_1']['url'])) : ?>
                                <div class="col-auto">
                                    <a href="<?= $section_3_1['button_1']['url'] ?>" class="btn bordered border-orange text-orange px-4 px-xl-5"><?= $section_3_1['button_1']['title'] ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($section_3_1['button_2']['url'])) : ?>
                                <div class="col-auto">
                                    <a href="<?= $section_3_1['button_2']['url'] ?>" class="btn btn-orange text-white px-4 px-xl-5"><?= $section_3_1['button_2']['title'] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg" data-aos="fade-left">
                        <div class="description">
                            <?= $section_3_1['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_3_2">
            <?php $section_3_2 = $section_3['section_3_2']; ?>
            <div class="container">
                <div class="row align-items-center gx-lg-5 gy-5 gy-lg-0">
                    <div class="col-12 col-lg" data-aos="fade-right"><img src="<?= $section_3_2['image']['url'] ?>" alt="<?= $section_3_2['image']['alt'] ?>" class="w-100"></div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="heading fs-5 letter-spacing-n23 text-dark fw-700 line-height-4"><?= $section_3_2['title'] ?></div>
                        <div class="description"><?= $section_3_2['description'] ?></div>
                        <img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="Two dots">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4">
        <?php $section_4 = get_field('section_4'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="heading fs-4 letter-spacing-n23 fw-700 line-height-1"><?= $section_4['title'] ?></div>
                    <div class="row gx-xl-10 description">
                        <div class="col-lg-7" data-aos="fade-right"><?= $section_4['description_1'] ?></div>
                        <div class="col-lg" data-aos="fade-left"><?= $section_4['description_2'] ?></div>
                    </div>
                    <div class="row">
                        <?php if (isset($section_4['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_4['button_1']['url'] ?>" class="btn bordered border-white text-white px-4 px-xl-5"><?= $section_4['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_4['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_4['button_2']['url'] ?>" class="btn btn-white text-secondary px-4 px-xl-5"><?= $section_4['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </div>
</div>

<?php get_footer(); ?>