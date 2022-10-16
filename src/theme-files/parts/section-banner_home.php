<?php
$banner = get_field("banner");
$banner_buttons = get_field("banner_buttons");
?>
<header class="home_header">
    <?php get_template_part('parts/section', 'nav'); ?>
    <div class="banner" data-aos="fade-up">
        <div class="container">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-2 col-lg-3 text-center">
                    <img src="<?= $banner['logo']['url'] ?>" alt="<?= $banner['logo']['alt'] ?>">
                </div>
                <div class="col">
                    <h1 class="fs-9 fw-900"><?= $banner['heading'] ?></h1>
                    <h2 class="fs-9 fw-500"><?= $banner['sub_heading'] ?></h2>
                    <div class="fs-17 text-grey fs-500 py-2"><?= $banner['description'] ?></div>
                    <div class="row pt-4">
                        <?php if (isset($banner_buttons['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $banner_buttons['button_1']['url'] ?>" class="btn btn-orange text-white px-4"><?= $banner_buttons['button_1']['title']  ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($banner_buttons['button_2']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $banner_buttons['button_2']['url'] ?>" class="btn btn-white bordered border-orange text-orange px-4"><?= $banner_buttons['button_2']['title'] ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>