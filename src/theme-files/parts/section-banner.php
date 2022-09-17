<?php $banner_buttons = get_field("banner_buttons"); ?>
<header class="subpage_header">
    <?php get_template_part('parts/section', 'nav'); ?>
    <div class="banner">
        <div class="container">
            <div class="row gx-xxl-7">
                <div class="col-auto">
                    <h1 class="heading fs-9 fw-900">
                        <?= get_field('banner_title') !== null ? get_field('banner_title') : the_title() ?>
                    </h1>
                </div>
                <div class="col">
                    <div class="row">
                        <?php if (isset($banner_buttons['button_1']['url'])) : ?>
                            <div class="col-auto">
                                <a href="<?= $banner_buttons['button_1']['url'] ?>" class="btn btn-orange text-white px-4"><?= $banner_buttons['button_1']['title'] ?></a>
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