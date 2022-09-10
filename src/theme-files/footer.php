<footer>
    <div class="container">
        <div class="row justify-content-center gy-4 gy-md-0 justify-content-md-between align-items-center py-4 pb-md-5">
            <div class="col-8 col-md-auto col-lg-3"><img src="<?= get_field('logo', 'options')['url'] ?>" alt="<?= get_field('logo', 'options')['alt'] ?>" class="footer-logo"></div>
            <div class="col-md-auto">
                <div class="text-white text-center fs-18 fw-500 text-capitalize">
                    <?= get_field('footer_tagline', 'options') ?></div>
            </div>
            <div class="col-auto">
                <div class="row">
                    <?php if (have_rows('socials', 'option')) :
                        while (have_rows('socials', 'option')) : the_row();
                            $icon = get_sub_field('icon');
                            $username = get_sub_field('username');
                            $url = get_sub_field('url');
                    ?>
                            <div class="col-auto">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                <span class="social_username"><?= $username ?></span>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="navigation_wrapper">
        <div class="container">
            <div class="row justify-content-between gy-4 gy-md-0">
                <div class="col-6 col-md-auto">
                    <div class="font-roboto fw-700 fs-23 pb-3 pb-md-4">SiteMap</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Sitemap',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto">
                    <div class="font-roboto fw-700 fs-23 pb-3 pb-md-4">About Solar Power</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer About',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto">
                    <div class="font-roboto fw-700 fs-23 pb-3 pb-md-4">Residential</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'menu_class' => 'navbar-nav',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto">
                    <div class="font-roboto fw-700 fs-23 pb-3 pb-md-4">Commercial</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'menu_class' => 'navbar-nav',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-md-4">
                    <div class="font-roboto fw-700 fs-23 pb-3 pb-md-4">Solar Services</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Services',
                        'link_class' => 'nav-link',
                        'container_class' => 'solar_services',
                        'container_id' => '',
                    )); ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer_bottom_wrapper">
        <div class="container">
            <div class="row justify-content-center gy-4 gy-md-0 justify-content-md-between align-items-center">
                <div class="col-xl-5">
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Bottom Menu',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_bottom_menu',
                        'container_id' => '',
                    )); ?>
                </div>
                <div class="col-auto"><?= date('Y') ?> &copy; All Rights Reserved <span class="text-orange px-3">|</span> SV Solar</div>
                <div class="col-auto">
                    <a href="https://www.aiims.com.au/like-our-work/" target="_blank"><img src="<?= get_template_directory_uri() ?>/images/logo/aiims.png" alt="AIIMS"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>