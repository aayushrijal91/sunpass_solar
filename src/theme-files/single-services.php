<?php
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="innerService_page">
    <section class="section_1">
        <img src="<?= get_template_directory_uri() ?>/images/lib/service-house.png" alt="House" class="service_house">
        <?php $section_1 = get_field('section_1') ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11" data-aos="fade-up">
                    <div class="row">
                        <div class="<?= $section_1['orientation'] == 'Horizontal' ? 'col-lg-6' : 'col-12' ?>">
                            <div class="heading text-secondary fw-700 fs-8 letter-spacing-n23 text-capitalize"><?= $section_1['title'] ?></div>
                        </div>
                        <div class="<?= $section_1['orientation'] == 'Horizontal' ? 'col-lg-6' : 'col-12' ?>">
                            <div class="text-light-grey line-height-2 fs-22 letter-spacing-n066<?= $section_1['orientation'] == 'Vertical' ? ' pt-3' : '' ?>"><?= $section_1['description'] ?></div>
                        </div>
                    </div>
                    <div class="row justify-content-center gy-4 gy-lg-0 gx-lg-4 gx-xl-7 pt-5 pt-xl-6">
                        <?php
                        if (have_rows('section_1')) :
                            while (have_rows('section_1')) : the_row();
                                if (have_rows('description_columns')) :
                                    while (have_rows('description_columns')) : the_row();
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                        ?>
                                        <div class="col-lg-6" data-aos="fade-up">
                                            <div class="description_column">
                                                <div class="text-orange fw-700 letter-spacing-n23 fs-10 line-height-4"><?= $title ?></div>
                                                <div class="text-light-grey fs-22 line-height-2 letter-spacing-n066 pt-4">
                                                    <?= $description ?>
                                                </div>
                                            </div>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $section_2 = get_field('section_2');
    if ($section_2['active']) :
    ?>
        <section class="section_2">
            <img src="<?= get_template_directory_uri() ?>/images/background/homepage_section_2_globe.png" alt="Globe" class="globe">
            <div class="container-fluid">
                <div class="row justify-content-center" data-aos="fade-up">
                    <div class="col-lg-11">
                        <div class="text-center text-capitalize letter-spacing-n143 fw-900 fs-5 pb-4 line-height-1">What do we offer?</div>
                        <?php if ($section_2['choose_template'] == 'Template 1') :
                            $template_1 = $section_2['template_1']; ?>
                            <div class="template_1">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 text-center"><?= $template_1['subtitle'] ?></div>
                                </div>

                                <div class="row align-items-center gy-4 g-lg-4 g-xl-5 py-5 py-xl-7">
                                    <div class="col-lg-4">
                                        <div class="heroTitle fw-900 fs-14 text-capitalize"><?= $template_1['hero_text'] ?></div>
                                    </div>
                                    <?php
                                    if (have_rows('section_2')) :
                                        while (have_rows('section_2')) : the_row();
                                            if (have_rows('template_1')) :
                                                while (have_rows('template_1')) : the_row();
                                                    if (have_rows('offering_list')) :
                                                        while (have_rows('offering_list')) : the_row();
                                                            $list = get_sub_field('text');
                                    ?>
                                                            <div class="col-lg-4">
                                                                <div class="list text-capitalize fs-18 line-height-2"><?= $list ?></div>
                                                            </div>
                                    <?php
                                                        endwhile;
                                                    endif;
                                                endwhile;
                                            endif;
                                        endwhile;
                                    endif;
                                    ?>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-11 text-center letter-spacing-n066 fs-22 line-height-5"><?= $template_1['description'] ?></div>
                                </div>
                            </div>
                        <?php elseif ($section_2['choose_template'] == 'Template 2') :
                            $template_2 = $section_2['template_2']; ?>
                            <div class="template_2">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 text-center"><?= $template_2['subtitle'] ?></div>
                                    <div class="col-lg-11">
                                        <div class="row g-4 g-xl-5 pt-5 pt-xl-7">
                                            <?php
                                            if (have_rows('section_2')) :
                                                while (have_rows('section_2')) : the_row();
                                                    if (have_rows('template_2')) :
                                                        while (have_rows('template_2')) : the_row();
                                                            if (have_rows('offering_list')) :
                                                                while (have_rows('offering_list')) : the_row();
                                                                    $title = get_sub_field('title');
                                                                    $description = get_sub_field('description');
                                            ?>
                                                                    <div class="col-lg-6">
                                                                        <div class="fw-900 fs-18"><?= $title ?></div>
                                                                        <div class="description text-capitalize line-height-7 pt-3"><?= $description ?></div>
                                                                    </div>
                                            <?php
                                                                endwhile;
                                                            endif;
                                                        endwhile;
                                                    endif;
                                                endwhile;
                                            endif;
                                            ?>
                                            <div class="col-lg-6">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="brands_wrapper">
                    <?php get_template_part('parts/section', 'brands'); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row gy-5 gy-lg-0 gx-xl-5">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="row justify-content-end">
                                <div class="col-xl-11">
                                    <div class="heading text-capitalize fw-900 fs-2 letter-spacing-n212"><?= $section_3['title'] ?></div>
                                    <div class="description"><?= $section_3['description'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <img src="<?= $section_3['image']['url'] ?>" alt="<?= $section_3['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $section_4 = get_field('section_4');
    if (!empty($section_4['title']) && !empty($section_4['description'])) :
    ?>
        <section class="section_4">
            <img src="<?= get_template_directory_uri() ?>/images/lib/sunpass-passport.png" alt="Sunpass Passport" class="sunpass_passport">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-11">
                        <div class="row gy-4 gy-lg-0 gx-xl-5">
                            <div class="col-lg-5" data-aos="fade-right">
                                <div class="fw-700 fs-7 line-height-4 pb-3 text-capitalize"><?= $section_4['title'] ?></div>
                                <div class="row pt-3 pt-lg-4">
                                    <?php if (isset($section_4['button_1']['url'])) : ?>
                                        <div class="col-auto">
                                            <a href="<?= $section_4['button_1']['url'] ?>" class="btn bordered border-white text-white px-4"><?= $section_4['button_1']['title'] ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($section_4['button_2']['url'])) : ?>
                                        <div class="col-auto">
                                            <a href="<?= $section_4['button_2']['url'] ?>" class="btn btn-white text-blue px-4"><?= $section_4['button_2']['title'] ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg col-xl-5 col-xxl pe-xl-5" data-aos="fade-left">
                                <div class="description line-height-2 letter-spacing-n066"><?= $section_4['description'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;    ?>
</div>

<?php get_footer(); ?>