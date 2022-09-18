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
    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fw-700 fs-13 line-height-4 text-capitalize"><?= $section_2['title'] ?></div>
                    <div class="line-height-11 pt-3"><?= $section_2['subtitle'] ?></div>
                </div>
            </div>
            <div class="services_list">
                <div class="row">
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
                            <div class="col-md-6 col-xl-3">
                                <a href="<?= $link ?>" class="service_card">
                                    <div class="title fs-18"><?= $title ?></div>
                                    <div class="description"><?= $description ?></div>
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