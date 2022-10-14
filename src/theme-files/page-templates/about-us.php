<?php
/*
 * Template Name: About Us
 * About Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="aboutus_page">
    <div class="top_section_wrapper">
        <div class="section_1">
            <div class="container">
                <?php $section_1 = get_field("section_1"); ?>
                <div class="row align-items-center">
                    <div class="col-lg-8" data-aos="fade-right">
                        <div class="fs-10 fw-700 letter-spacing-n23 lh-6 pb-4 pb-lg-6 text-orange"><?= $section_1['title'] ?></div>
                    </div>
                    <div class="col-lg" data-aos="fade-left">
                        <div class="fs-20 text-light-grey lh-5">
                            <?= $section_1['description'] ?>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 pt-lg-0" data-aos="fade-right">
                    <div class="col-auto">
                        <a href="<?= $section_1['button_1']['url'] ?>" class="btn bordered border-orange text-orange px-4 px-xl-5"><?= $section_1['button_1']['title'] ?></a>
                    </div>
                    <div class="col-auto">
                        <a href="<?= $section_1['button_2']['url'] ?>" class="btn btn-orange text-white px-4 px-xl-5"><?= $section_1['button_2']['title'] ?></a>
                    </div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/images/lib/solar-installation.png" alt="Solar Installation" class="w-100">
        </div>
        <div class="section_2">
            <?php $section_2 = get_field("section_2"); ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right"><?= $section_2['column_1'] ?></div>
                    <div class="col-lg" data-aos="fade-left"><?= $section_2['column_2'] ?></div>
                </div>
            </div>
        </div>
        <?php $section_3 = get_field("section_3"); ?>
        <div class="section_3 lazyload" data-src="<?= $section_3['background_image']['url'] ?>">
            <div class="container" data-aos="fade-left">
                <div class="row justify-content-end">
                    <div class="col-lg-6 description"><?= $section_3['description'] ?></div>
                </div>
            </div>
        </div>
        <div class="section_4">
            <div class="container">
                <?php $section_4 = get_field("section_4"); ?>
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="fs-11 fw-700 letter-spacing-n23 lh-6 pb-4 pb-lg-6 text-orange"><?= $section_4['title'] ?></div>
                        <div class="row">
                            <div class="col-auto">
                                <a href="<?= $section_4['button_1']['url'] ?>" class="btn bordered border-orange text-orange px-4 px-xl-5"><?= $section_4['button_1']['title'] ?></a>
                            </div>
                            <div class="col-auto">
                                <a href="<?= $section_4['button_2']['url'] ?>" class="btn btn-orange text-white px-4 px-xl-5"><?= $section_4['button_2']['title'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg" data-aos="fade-left">
                        <div class="fs-20 text-light-grey lh-7 letter-spacing-n074">
                            <?= $section_4['description'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq_wrapper">
        <?php get_template_part('parts/section', 'faq'); ?>
    </div>
    <div class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </div>
</div>

<?php get_footer(); ?>