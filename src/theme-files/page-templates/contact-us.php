<?php
/*
 * Template Name: Contact Us
 * Contact Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="contactus_page">
    <img src="<?= get_template_directory_uri() ?>/images/lib/sunpass-passport.png" alt="Sunpass Passport" class="sunpass_passport">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6 col-xl-5" data-aos="fade-right">
                <div class="row align-items-center">
                    <?php
                    if (have_rows('socials', 'options')) :
                        $index = 1;
                        while (have_rows('socials', 'options')) : the_row();
                            $icon = get_sub_field('icon_2');
                            $url = get_sub_field('url');
                    ?>
                            <div class="col-auto order-<?= $index == 1 ? 2 : 1 ?>">
                                <a href="<?= $url ?>" target="_blank" class="">
                                    <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                </a>
                            </div>
                    <?php
                            $index++;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="heading text-secondary fw-900 fs-7 line-height-10 py-5">Make a Booking Today. <span class="fw-400">Simply fill in the form below &amp; we'll get back to you as soon as possible.</span></div>
                <div class="row align-items-center py-4 pt-lg-7 pb-lg-6">
                    <div class="col-auto col-md-1">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.9756 21.6088C26.8667 21.6088 24.834 21.27 22.9283 20.6432C22.3439 20.4569 21.6748 20.5924 21.2089 21.0583L17.4823 24.7934C12.68 22.3541 8.76697 18.4326 6.31923 13.6388L10.0459 9.90368C10.5117 9.43785 10.6472 8.76874 10.4609 8.18433C9.83415 6.27865 9.49536 4.23746 9.49536 2.12851C9.49536 1.18837 8.74156 0.43457 7.80143 0.43457H1.87265C0.932513 0.43457 0.178711 1.18837 0.178711 2.12851C0.178711 18.0346 13.0696 30.9254 28.9756 30.9254C29.9158 30.9254 30.6696 30.1716 30.6696 29.2315V23.3027C30.6696 22.3626 29.9158 21.6088 28.9756 21.6088ZM27.2817 15.68H30.6696C30.6696 7.26114 23.843 0.43457 15.4241 0.43457V3.82244C21.9712 3.82244 27.2817 9.13294 27.2817 15.68ZM20.506 15.68H23.8938C23.8938 11.0047 20.0994 7.21032 15.4241 7.21032V10.5982C18.2276 10.5982 20.506 12.8765 20.506 15.68Z" fill="#13984C" />
                        </svg>
                    </div>
                    <div class="col-auto text-secondary fs-12 fw-700 line-height-1"><?= get_field('phone_number', 'options') ?></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto col-md-1">
                        <svg width="27" height="20" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.8242 0.0600586H3.0612C1.62725 0.0600586 0.478797 1.17025 0.478797 2.54093L0.46582 17.4262C0.46582 18.7969 1.62725 19.9071 3.0612 19.9071H23.8242C25.2582 19.9071 26.4196 18.7969 26.4196 17.4262V2.54093C26.4196 1.17025 25.2582 0.0600586 23.8242 0.0600586ZM23.8242 5.02181L13.4427 11.224L3.0612 5.02181V2.54093L13.4427 8.74313L23.8242 2.54093V5.02181Z" fill="#13984C" />
                        </svg>
                    </div>
                    <div class="col-auto text-secondary fw-700 fs-18">Email Us</div>
                    <div class="col-12 text-secondary fw-500 fs-22 pt-3"><?= get_field('email', 'options') ?></div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="form_wrapper">
                    <?= do_shortcode('[contact-form-7 id="390" title="Contact Us"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>