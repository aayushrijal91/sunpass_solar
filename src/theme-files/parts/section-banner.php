<?php
$banner_buttons = get_field("banner_buttons");
$banner_title;

if ((get_field('banner_title') !== null) && (empty(get_field('banner_title')) == false)) {
    $banner_title = get_field('banner_title');
} else {
    $banner_title = get_the_title();
}
?>
<?php get_template_part('parts/section', 'nav'); ?>
<header class="subpage_header">
    <div class="banner" data-aos="fade-right">
        <div class="container">
            <div class="row gy-4 gy-xl-0 gx-xl-7 align-items-center">
                <div class="col-12 col-xl-auto">
                    <h1 class="heading 54 fw-700">
                        <?= empty($banner_title) ? "Page Not Found" : $banner_title; ?>
                    </h1>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="<?= isset($banner_buttons['button_1']['url']) ? $banner_buttons['button_1']['url'] : "./" ?>" class="btn btn-orange text-white px-4"><?= isset($banner_buttons['button_1']['title']) ? $banner_buttons['button_1']['title'] : "Get Started" ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="<?= isset($banner_buttons['button_2']['url']) ? $banner_buttons['button_2']['url'] : "./" ?>" class="btn btn-white bordered border-orange text-orange px-4"><?= isset($banner_buttons['button_2']['title']) ? $banner_buttons['button_2']['title'] : "Learn More" ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>