<?php
/*
 * Template Name: Future of Solar
 * Future of Solar page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="futureOfSolar_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <img src="<?= get_template_directory_uri() ?>/images/lib/sunpass-passport.png" alt="Sunpass Passport" class="sunpass_passport">
        <div class="container">
            <div class="row gx-xxl-5">
                <div class="col-lg-4">
                    <div class="heading text-capitalize fs-4 letter-spacing-n23 fw-700"><?= $section_1['title'] ?></div>
                    <div class="row pt-5">
                        <?php if (isset($section_1['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_1']['url'] ?>" class="btn bordered border-white text-white px-4 px-xxl-5"><?= $section_1['button_1']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($section_1['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $section_1['button_2']['url'] ?>" class="btn btn-white text-secondary px-4 px-xxl-5"><?= $section_1['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col col-xxl-7 description">
                    <?= $section_1['description'] ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-11 text-center">
                    <div class="fs-5 text-capitalize text-dark letter-spacing-n23 fw-700 line-height-1"><?= $section_2['title'] ?></div>
                    <div class="letter-spacing-n066 subtitle text-lighter-grey pt-4"><?= $section_2['subtitle'] ?></div>
                </div>
            </div>
            <div class="row justify-content-center programs pt-5 gx-3">
                <?php if (have_rows('section_2')) :
                    while (have_rows('section_2')) : the_row();
                        if (have_rows('programs')) :
                            while (have_rows('programs')) : the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                ?>
                                <div class="col-md-6 col-lg-4 h-inherit">
                                    <div class="program_card">
                                        <div class="title"><?= $title ?></div>
                                        <div class="description"><?= $description ?></div>
                                    </div>
                                </div>
                <?php endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="section_3">
        <div class="container">
            <img src="<?= get_template_directory_uri() ?>/images/lib/solar-panels.jpg" alt="Solar Panels" class="w-100">
        </div>
    </section>

    <section class="faq_wrapper">
        <?php get_template_part('parts/section', 'faq'); ?>
    </section>
</div>

<?php get_footer(); ?>