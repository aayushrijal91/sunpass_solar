<?php
/*
 * Template Name: Industry Experience
 * Industry Experience page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="industryExperience_page">
    <div class="top_section_wrapper">
        <div class="container">
            <?php $section_1 = get_field("section_1"); ?>
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="fs-50 fw-700 letter-spacing-n23 lh-6 pb-4 pb-lg-6 text-orange"><?= $section_1['title'] ?></div>
                    <div class="row pt-3 pt-lg-0">
                        <div class="col-auto">
                            <a href="<?= isset($section_1['button_1']['title']) ? $section_1['button_1']['title'] : "./" ?>" class="btn bordered border-secondary text-secondary px-4 px-xl-5"><?= isset($section_1['button_1']['title']) ? $section_1['button_1']['title'] : "Learn More" ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="<?= isset($section_1['button_2']['title']) ? $section_1['button_2']['title'] : "./" ?>" class="btn btn-secondary text-white px-4 px-xl-5"><?= isset($section_1['button_2']['title']) ? $section_1['button_2']['title'] : "Get Started" ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg" data-aos="fade-left">
                    <div class="fs-23 text-light-grey lh-5">
                        <?= $section_1['description'] ?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/images/lib/solar-installation.png" alt="Solar Installation" class="w-100">
    </div>
    <div class="faq_wrapper">
        <?php get_template_part('parts/section', 'faq'); ?>
    </div>
    <div class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </div>
</div>

<?php get_footer(); ?>