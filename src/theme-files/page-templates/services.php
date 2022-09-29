<?php
/*
 * Template Name: Services
 * Services page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="services_page">
    <?php $section_1 = get_field('section_1'); ?>
    <section class="section_1">
        <div class="container">
            <div class="text-capitalize text-secondary fw-900 letter-spacing-n23 fs-2 line-height-1"><?= $section_1['title'] ?></div>
            <div class="text-light-grey letter-spacing-n074 fs-20 fw-500 line-height-2 pt-4"><?= $section_1['subtitle'] ?></div>
        </div>
    </section>
    <img src="<?= get_template_directory_uri() ?>/images/lib/solar-services.jpg" class="w-100" alt="Solar Services">
    <?php get_template_part('parts/section', 'brighte'); ?>
    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="fw-700 fs-13 line-height-4 text-capitalize"><?= $section_2['title'] ?></div>
                    <div class="line-height-11 pt-3"><?= $section_2['subtitle'] ?></div>
                </div>
            </div>
            <div class="services_list">
                <div class="row gy-5 py-5">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'services',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                            $title = get_the_title();
                            $link = get_the_permalink();
                            $description = get_field('cover')['small_description'];
                            // $terms = get_the_terms($post->ID, 'categories');
                            // $category = strtolower($terms[0]->name);
                    ?>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <a href="<?= $link ?>" class="service_card">
                                    <div class="image"></div>
                                    <div class="title fs-18"><?= $title ?></div>
                                    <div class="description"><?= $description ?></div>
                                    <div class="row align-items-center py-1">
                                        <div class="col-auto">
                                            <img src="<?= get_template_directory_uri() ?>/images/icons/verified.png" alt="Verified">
                                        </div>
                                        <div class="col fs-25">No job too big or small</div>
                                    </div>
                                    <div class="row align-items-center py-1">
                                        <div class="col-auto">
                                            <img src="<?= get_template_directory_uri() ?>/images/icons/quality.png" alt="Quality">
                                        </div>
                                        <div class="col fs-25">Quality installations</div>
                                    </div>
                                    <div class="row align-items-center py-1">
                                        <div class="col-auto">
                                            <svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <rect y="0.609375" width="18.8015" height="21.9417" fill="url(#pattern0)" />
                                                <defs>
                                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                        <use xlink:href="#image0_19_1007" transform="translate(-0.0835091) scale(0.0364693 0.03125)" />
                                                    </pattern>
                                                    <image id="image0_19_1007" width="32" height="32" xlink:href="data:image/png;base64,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" />
                                                </defs>
                                            </svg>

                                        </div>
                                        <div class="col fs-25">30+ years experience</div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </section>
</div>

<?php get_footer(); ?>