<?php
/*
 * Template Name: Areas
 * Areas page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>

<div class="areas_page">
    <section class="areatop bg-light">
        <div class="container">
            <?php  // The Loop
            if ($the_query->have_posts()) {
                $count = 0;
            ?>
                <div class="row justify-content-between mb-5 align-items-center" data-aos="fade-up">
                    <div class="col-md">
                        <div class="fs-36">Select an area below</div>
                    </div>
                    <div class="col-md-auto sub-heading">
                        Can’t find your area below? <a href="tel:<?= get_field('phone_number', 'options') ?>">Give us a Call</a> or <a href="/contact-us/">Enquire Now</a>
                    </div>
                </div>

                <div class="areas_droplist d-block d-md-none" data-aos="fade-up">
                    <div class="caption">All</div>
                    <div class="list">
                        <?php foreach (range('A', 'Z') as $char) {
                        ?>
                            <div class="areas_alphabet item" id="<?= $char ?>"><?= $char ?></div>
                        <?php } ?>
                    </div>
                </div>

                <div class="alphbetwrap d-none d-md-block" data-aos="fade-up">
                    <div class="areas_allSearch active">ALL</div>
                    <?php foreach (range('A', 'Z') as $char) {
                        $htm3[$char] = '';
                    ?>
                        <div class="areas_alphabet"><?= $char ?></div>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                            if (strpos(get_the_title(), $char) === 0) {
                                $liclass = str_replace(' ', '-', strtolower(get_the_title()));

                                $htm3[$char] .= '<li class=' . $liclass . '><a class="suburb_link" target="_blank" href=' . get_the_permalink() . '>' . get_the_title() . '</a></li>';
                            }
                        endwhile;
                    } ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="areawrap section-space" data-aos="fade-up">
        <div class="container">
            <?php  // The Loop
            if ($the_query->have_posts()) {
                $count = 0;
            ?>
                <div class="arealistwrap">
                    <div class="row g-4 g-md-5">
                        <?php foreach (range('A', 'Z') as $char) {
                            if (isset($htm3[$char]) && $htm3[$char] != '') {
                        ?>
                                <div class="col-lg-4 col-md-6 arealist char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
                                <div class="arealist_inner">
                                    <h3 class="alphabet-title font-weight-bold"><?= $char ?></h3>
                                    <ul>
                                        <?php echo $htm3[$char]; ?>
                                    </ul>
                                    <div class="mbottom "></div>
                                </div>
                                </div>
                        <?php $count++;
                            }
                        } ?>
                    </div>
                </div>
                <div class="noresult">No Result Found.</div>
                <div class="areas_loadMoreWrap "><a href="javascript:void(0)" class="areas_loadMoreBtn btn btn-secondary text-white px-4 px-xl-5">Load More</a></div>
            <?php }
            wp_reset_postdata(); ?>

        </div>
    </section>
    <?php get_template_part('parts/section', 'brighte'); ?>
    <section class="map">
        <iframe style="border: 0;" src="<?= get_field('map') ?>" allowfullscreen="allowfullscreen"></iframe>
    </section>
</div>


<?php get_footer(); ?>