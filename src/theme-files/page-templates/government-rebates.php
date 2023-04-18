<?php
/*
 * Template Name: Government Rebates
 * Government Rebates page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="governmentRebates_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="fs-64 text-dark fw-700 lh-1 heading"><?= $section_1['title'] ?></div>
                </div>
                <div class="col">
                    <div class="description text-light-grey lh-7">
                        <?= $section_1['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-6">
                            <div class="text-dark fs-70 fw-800 lh-1 heading pb-5"><?= $section_2['title'] ?></div>
                            <div class="description text-light-grey fs-20 lh-8">
                                <?= $section_2['description'] ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>