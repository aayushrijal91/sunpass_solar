<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="innerService_page">
    <section class="section_1">
        <img src="<?= get_template_directory_uri() ?>/images/lib/service-house.png" alt="House" class="service_house">
        <?php $section_1 = get_field('section_1') ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="heading text-secondary fw-700 fs-8 letter-spacing-n23 text-capitalize"><?= $section_1['title'] ?></div>
                    <div class="text-light-grey line-height-2 fs-22 letter-spacing-n066 pt-3"><?= $section_1['description'] ?></div>

                    <div class="row justify-content-center gx-xl-4 gx-xxl-7 pt-5 pt-xl-6">
                        <?php
                        if (have_rows('section_1')) :
                            while (have_rows('section_1')) : the_row();
                                if (have_rows('description_columns')) :
                                    while (have_rows('description_columns')) : the_row();
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                        ?>
                                        <div class="col-lg-6">
                                            <div class="description_column">
                                                <div class="text-orange fw-700 letter-spacing-n23 fs-7 line-height-4"><?= $title ?></div>
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

    <section class="section_2">
        <div class="container">
            <div class="text-center text-capitalize letter-spacing-n143 fw-900 fs-5">What do we offer?</div>

            <div class="brands_wrapper">
                <?php get_template_part('parts/section', 'brands'); ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>