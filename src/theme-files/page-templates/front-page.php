<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner_home');
?>

<div class="homepage">
    <section class="section_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="<?= get_field('section_1')['hero_logo']['url'] ?>" alt="<?= get_field('section_1')['hero_logo']['alt'] ?>">
                    <div class="description pt-5 text-white fs-21 line-height-2">
                        <?= get_field('section_1')['description'] ?>
                    </div>
                    <?php if (have_rows('section_1')) :
                        while (have_rows('section_1')) : the_row();
                            $index = 1;
                            if (have_rows('description_list')) :
                                while (have_rows('description_list')) : the_row();
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                    ?>
                                    <div class="row pt-5">
                                        <div class="col-auto">
                                            <div class="serial_no"><?= $index ?></div>
                                        </div>
                                        <div class="col text-white">
                                            <div class="fs-20 text-capitalize"><?= $title ?></div>
                                            <div class="fs-23 line-height-2 pt-3"><?= $description ?></div>
                                        </div>
                                    </div>
                    <?php
                                    $index++;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?= get_field("section_1")['image']['url'] ?>" alt="<?= get_field("section_1")['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="section_2_1">
            <?php $section_2_1 = get_field("section_2")['section_2_1']; ?>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="row justify-content-center justify-content-xl-end">
                            <div class="col-11 col-xl-10 col-xxl-9 pe-xxl-9">
                                <div class="fs-2 fw-900 line-height-1 letter-spacing-n212 pb-3"><?= $section_2_1['title'] ?></div>
                                <div class="line-height-2 text-light-grey fs-20 py-4"><?= $section_2_1['description'] ?></div>
                                <img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="two dots">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><img src="<?= $section_2_1['image']['url'] ?>" alt="<?= $section_2_1['image']['alt'] ?>"></div>
                </div>
            </div>
        </div>
        <div class="section_2_2">
            <?php $section_2_2 = get_field("section_2")['section_2_2']; ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="<?= $section_2_2['image']['url'] ?>" alt="<?= $section_2_2['image']['alt'] ?>">
                    </div>
                    <div class="col-md-6 px-xxl-5">
                        <div class="fs-2 fw-900 line-height-1 letter-spacing-n212 pb-3 text-orange"><?= $section_2_2['title'] ?></div>
                        <div class="line-height-2 text-light-grey fs-20 py-4"><?= $section_2_2['description'] ?></div>
                        <img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="two dots">
                    </div>
                </div>
            </div>
        </div>
        <?php $section_2_3 = get_field("section_2")['section_2_3']; ?>
        <div class="section_2_3 lazyload" data-src="<?= $section_2_3['background']['url'] ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="fs-3 fw-900 text-orange line-height-1 letter-spacing-n23"><?= $section_2_3['title'] ?></div>
                        <div class="fs-19 pe-xxl-5 description"><?= $section_2_3['description'] ?></div>
                        <div class="row">
                            <div class="col-auto">
                                <a href="<?= $section_2_3['button_1']['url'] ?>" class="btn btn-white bordered border-orange text-orange px-4"><?= $section_2_3['button_1']['title'] ?></a>
                            </div>
                            <div class="col-auto">
                                <a href="<?= $section_2_3['button_2']['url'] ?>" class="btn btn-orange text-white px-4"><?= $section_2_3['button_2']['title'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_2_4">
            <?php $section_2_4 = get_field("section_2")['section_2_4']; ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="fs-5 fw-700 text-orange letter-spacing-n23"><?= $section_2_4['title'] ?></div>
                        <div class="row pt-5">
                            <div class="col-auto">
                                <a href="<?= $section_2_4['button_1']['url'] ?>" class="btn bordered border-secondary text-secondary px-4"><?= $section_2_4['button_1']['title'] ?></a>
                            </div>
                            <div class="col-auto">
                                <a href="<?= $section_2_4['button_2']['url'] ?>" class="btn btn-secondary text-white px-4"><?= $section_2_4['button_2']['title'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="line-height-2 fs-23 text-light-grey"><?= $section_2_4['description'] ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_2_5">
            <?php $section_2_5 = get_field("section_2")['section_2_5']; ?>
            <div class="container">
                <div class="row align-items-center gx-xxl-5">
                    <div class="col-md-5"><img src="<?= $section_2_5['image']['url'] ?>" alt="<?= $section_2_5['image']['alt'] ?>"></div>
                    <div class="col">
                        <div class="fs-2 fw-900 text-capitalize line-height-1 letter-spacing-n212"><?= $section_2_5['title'] ?></div>
                        <div class="description fs-21"><?= $section_2_5['description'] ?></div>
                        <img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="two dots">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="section_3">
        <div class="container">
            <?php $section_3 = get_field("section_3"); ?>
            <div class="row">
                <div class="col-lg-7">
                    <div class="fs-3 fw-700 letter-spacing-n23 line-height-4 pb-6"><?= $section_3['title'] ?></div>
                    <div class="d-flex">
                        <a href="<?= $section_3['button']['url'] ?>" class="btn btn-orange text-white px-4 px-xxl-5"><?= $section_3['button']['title'] ?></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="fs-20 text-light-grey line-height-5">
                        <?= $section_3['description'] ?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?= get_template_directory_uri() ?>/images/lib/solar-installation.png" alt="Solar Installation" class="w-100">
    </section>
    <section class="parts">
        <div class="part_1 text-light-grey">
            <?php get_template_part('parts/section', 'brands'); ?>
        </div>
        <div class="part_2">
            <?php get_template_part('parts/section', 'sustainability'); ?>
        </div>
        <div class="part_3">
            <div class="container">
                <img src="<?= get_template_directory_uri() ?>/images/lib/solar-panel-demo.jpg" alt="Solar panel demo" class="w-100">
            </div>
        </div>
        <?php get_template_part('parts/section', 'faq'); ?>
    </section>
    <section class="section_4">
        <?php $section_4 = get_field('section_4'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-orange fs-5 letter-spacing-n23 fw-700"><?= $section_4['title'] ?></div>
                    <div class="row pt-5 pt-xxl-6">
                        <div class="col-auto">
                            <a href="<?= $section_4['button_1']['url'] ?>" class="btn bordered border-secondary text-secondary px-4 px-xl-5"><?= $section_4['button_1']['title'] ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="<?= $section_4['button_2']['url'] ?>" class="btn btn-secondary text-white px-4 px-xl-5"><?= $section_4['button_2']['title'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 description"><?= $section_4['description'] ?></div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>