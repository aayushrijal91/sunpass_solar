<?php
/*
 * Template Name: Property Type
 * Property Type page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="propertyType_page">
    <section class="products">
        <div class="products_inner">
            <?php $section_1 = get_field('section_1'); ?>
            <?php $section_2 = get_field('section_2'); ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="text-orange fs-22">Inverters</div>
                        <div class="fs-2 lh-10 text-orange fw-900 letter-spacing-n23"><?= $section_1['title'] ?></div>
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php
                            if (have_rows('section_1')) :
                                while (have_rows('section_1')) : the_row();
                                    if (have_rows('products')) :
                                        $index = 1;
                                        while (have_rows('products')) : the_row();
                                            $kw = get_sub_field('kw');
                            ?>
                                            <button class="nav-link<?= $index == 1 ? ' active' : '' ?>" id="v-pills-<?= $index ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $index ?>" type="button" role="tab" aria-controls="v-pills-<?= $index ?>" aria-selected=<?= $index == 1 ? "true" : "false" ?>><?= $kw ?>kw</button>
                            <?php
                                            $index++;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="description letter-spacing-n074 fs-18 text-light-grey lh-9"><?= $section_1['description'] ?></div>
                        <div class="price text-orange letter-spacing-n074 fw-900 fs-10 lh-1">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php
                                if (have_rows('section_1')) :
                                    while (have_rows('section_1')) : the_row();
                                        if (have_rows('products')) :
                                            $index = 1;
                                            while (have_rows('products')) : the_row();
                                                $price = get_sub_field('price');
                                ?>
                                                <div class="tab-pane fade<?= $index == 1 ? ' show active' : '' ?>" id="v-pills-<?= $index ?>" role="tabpanel" aria-labelledby="v-pills-<?= $index ?>-tab">
                                                    From $<?= $price ?>
                                                </div>
                                <?php
                                                $index++;
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="pt-5"><img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="two dots"></div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="text-orange fs-22">Solars</div>
                        <div class="fs-2 lh-10 text-orange fw-900 letter-spacing-n23"><?= $section_2['title'] ?></div>
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php
                            if (have_rows('section_2')) :
                                while (have_rows('section_2')) : the_row();
                                    if (have_rows('products')) :
                                        $index = 100;
                                        while (have_rows('products')) : the_row();
                                            $kw = get_sub_field('kw');
                            ?>
                                            <button class="nav-link<?= $index == 100 ? ' active' : '' ?>" id="v-pills-<?= $index ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $index ?>" type="button" role="tab" aria-controls="v-pills-<?= $index ?>" aria-selected=<?= $index == 100 ? "true" : "false" ?>><?= $kw ?>kw</button>
                            <?php
                                            $index++;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="description letter-spacing-n074 fs-18 text-light-grey lh-9"><?= $section_2['description'] ?></div>
                        <div class="price text-orange letter-spacing-n074 fw-900 fs-10 lh-1">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php
                                if (have_rows('section_2')) :
                                    while (have_rows('section_2')) : the_row();
                                        if (have_rows('products')) :
                                            $index = 100;
                                            while (have_rows('products')) : the_row();
                                                $price = get_sub_field('price');
                                ?>
                                                <div class="tab-pane fade<?= $index == 100 ? ' show active' : '' ?>" id="v-pills-<?= $index ?>" role="tabpanel" aria-labelledby="v-pills-<?= $index ?>-tab">
                                                    From $<?= $price ?>
                                                </div>
                                <?php
                                                $index++;
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="pt-5"><img src="<?= get_template_directory_uri() ?>/images/icons/two-dots.png" alt="two dots"></div>
                    </div>
                    <div class="col-lg-6 text-center" data-aos="fade-left">
                        <img src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="parts">
        <div class="part_1 text-light-grey">
            <?php get_template_part('parts/section', 'brands'); ?>
        </div>
        <div class="part_2">
            <?php get_template_part('parts/section', 'sustainability'); ?>
            <img src="<?= get_template_directory_uri() ?>/images/lib/globe-left.png" alt="Globe" class="globe-left">
        </div>
        <div class="part_3">
            <div class="container">
                <img src="<?= get_template_directory_uri() ?>/images/lib/solar-panel-demo.jpg" alt="Solar panel demo" class="w-100">
            </div>
        </div>
        <?php get_template_part('parts/section', 'faq'); ?>
    </section>
</div>
<?php get_footer(); ?>