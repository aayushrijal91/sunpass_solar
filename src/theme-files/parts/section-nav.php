<?php $logo = get_field('logo', 'options'); ?>

<div class="hero_nav">
    <div class="slide-nav">
        <div class="container">
            <div class="d-flex justify-content-end">
                <a href="javascript:void(0)" class="pb-4" id="close-slidenav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#fff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </a>
            </div>
            <?php wp_nav_menu(array(
                'menu' => 'Mobile Menu',
                'menu_class' => 'navbar-nav',
                'item_class' => 'nav-item',
                'link_class' => 'nav-link',
                'container_class' => 'ms-auto mobile-menu',
                'container_id' => '',
            )); ?>
            <div class="row gx-4 pt-4">
                <?php if (have_rows('socials', 'options')) : ?>
                    <?php while (have_rows('socials', 'options')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $url = get_sub_field('link');
                    ?>
                        <div class="col-auto">
                            <a href="<?= $url ?>" class="">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
    
            <div class="pt-4">
                <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-yellow text-dark rounded-10 py-3 px-md-4 px-xl-2 px-xl-5 fs-16 fw-500 lh-1">
                    <?= get_field('phone_number', 'options') ?>
                </a>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <nav class="navbar navbar-expand-xl navbar-light">
                        <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                        <button class="navbar-toggler" id="triggerSlideNav">
                            <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="36.9417" height="3.875" rx="1.9375" fill="white" />
                                <rect y="14.2083" width="36.9417" height="3.875" rx="1.9375" fill="white" />
                                <rect y="27.125" width="36.9417" height="3.875" rx="1.9375" fill="white" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse" id="mainNav">
                            <div class="ms-auto">
                                <div class="d-flex align-items-center justify-content-end">
                                    <?php wp_nav_menu(array(
                                        'menu' => 'Primary Top Menu',
                                        'menu_class' => 'navbar-nav',
                                        'item_class' => 'nav-item px-lg-2 px-xl-3 px-xxl-4',
                                        'link_class' => 'nav-link',
                                        'container_class' => 'primary_top_menu',
                                        'container_id' => '',
                                    )); ?>
                                    <div class="ps-4">
                                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="btn btn-yellow text-dark rounded-10 py-3 px-md-4 px-xl-2 px-xl-5 fs-16 fw-500 lh-1">
                                            <?= get_field('phone_number', 'options') ?>
                                        </a>
                                    </div>
                                </div>
                                <?php wp_nav_menu(array(
                                    'menu' => 'Primary Menu',
                                    'menu_class' => 'navbar-nav',
                                    'item_class' => 'nav-item px-lg-2 px-xl-3 px-xxl-4',
                                    'link_class' => 'nav-link',
                                    'container_class' => 'primary_menu',
                                    'container_id' => '',
                                )); ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>