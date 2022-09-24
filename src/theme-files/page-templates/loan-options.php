<?php
/*
 * Template Name: Loan Options
 * Loan Options page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="loanoptions_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">

            <?php
            if (have_rows('section_1')) :
                while (have_rows('section_1')) : the_row();
                    if (have_rows('specification')) :
                        while (have_rows('specification')) : the_row();
                            $greenloan = get_sub_field('greenloan');
                            $variable_rate_from = get_sub_field('variable_rate_from');
                            $comparision_rate = get_sub_field('comparision_rate');
                            $about_loan = get_sub_field('about_loan');
                            $rate_warning_link = get_sub_field('rate_warning_link');
            ?>
                            <div class="row justify-content-between align-items-center py-3">
                                <div class="col-lg-8">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4">
                                            <div class="text-uppercase fs-20">Green Loan</div>
                                            <div class="fs-1 line-height-1 fw-700"><?= $greenloan['min'] ?><span class="fs-10"> to </span><?= $greenloan['max'] ?></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-capitalize fs-20">Variable Rate from</div>
                                            <div class="d-flex align-items-center">
                                                <div class="fs-1 line-height-1 fw-700"><?= $variable_rate_from ?></div>
                                                <div class="fs-18 ps-1">
                                                    <div>%</div>
                                                    <div>P.A.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-capitalize fs-20">Comparison Rate^</div>
                                            <div class="d-flex align-items-center">
                                                <div class="fs-1 line-height-1 fw-700"><?= $comparision_rate ?></div>
                                                <div class="fs-18 ps-1">
                                                    <div>%</div>
                                                    <div>P.A.</div>
                                                </div>
                                            </div>
                                            <a href="<?= $rate_warning_link ?>" class="text-decoration-none text-dark-grey fs-26">Comparison Rate Warning ></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="text-capitalize fs-18 line-height-1">About the loan</div>
                                    <div class="text-capitalize fs-24 pt-2">
                                        <?= $about_loan ?>
                                    </div>
                                </div>
                            </div>
            <?php
                        endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </section>
    <img src="<?= get_template_directory_uri() ?>/images/lib/solar-services.jpg" class="w-100" alt="Solar Services">
    <section class="section_2">
        <div class="container">
            <div class="heading text-center fs-5 fw-900 line-height-1">Loan Features</div>
            <div class="row gy-5">
                <?php
                if (have_rows('section_2')) :
                    while (have_rows('section_2')) : the_row();
                        if (have_rows('loan_features')) :
                            while (have_rows('loan_features')) : the_row();
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                ?>
                                <div class="col-lg-4">
                                    <div class="list text-capitalize line-height-2">
                                        <div class="fs-17 fw-700"><?= $title ?></div>
                                        <div class="fs-20 line-height-6"><?= $description ?></div>
                                    </div>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="pb-5 pb-xl-7 fs-5 text-capitalize fw-900 line-height-1 letter-spacing-n143 text-center">
                        <?= $section_3['hero_title'] ?>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg">
                            <div class="row">
                                <div class="col-auto">
                                    <img src="<?= get_template_directory_uri() ?>/images/icons/application-form.png" alt="">
                                </div>
                                <div class="col text-capitalize">
                                    <div class="text-secondary fw-700 fs-17"><?= $section_3['application']['title'] ?></div>
                                    <div class="fs-20 pt-2 pb-3"><?= $section_3['application']['description'] ?></div>
                                    <div class="d-inline-flex">
                                        <a href="<?= $section_3['application']['button']['url'] ?>" class="btn btn-secondary text-white px-4 px-xl-5"><?= $section_3['application']['button']['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="vertical_divider"></div>
                        </div>
                        <div class="col-lg">
                            <div class="row gx-xl-5">
                                <div class="col-auto">
                                    <img src="<?= get_template_directory_uri() ?>/images/icons/appointment-form.png" alt="">
                                </div>
                                <div class="col text-capitalize">
                                    <div class="text-secondary fw-700 fs-17"><?= $section_3['appointment']['title'] ?></div>
                                    <div class="fs-21 pt-2 pb-3"><?= $section_3['appointment']['description'] ?></div>
                                    <div class="d-inline-flex">
                                        <a href="<?= $section_3['appointment']['button']['url'] ?>" class="btn btn-secondary text-white px-4 px-xl-5 text-capitalize"><?= $section_3['appointment']['button']['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </section>
</div>

<?php get_footer(); ?>