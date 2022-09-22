<?php

/**
 * Template Name: Suburb
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="suburb_page">
    <section class="section_1">
        <div class="section_1_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading text-dark text-capitalize fs-6 fw-700">Licensed and Experienced Solar Technicians</div>
                        <div class="fs-19 fw-700 subheading text-orange pt-3">From small residential solar installation to large-scale commercial solar projects.</div>
                    </div>
                    <div class="col-lg-6 px-xxl-5">
                        <div class="description line-height-7 fs-24">
                            <p>From small residential solar installation to large-scale commercial solar projects, we can help you create the optimal solar power system based on your energy needs and budget. Do you have low power requirements for your home? A 1 kW system may be all you may require. A typical Australian household will require a 3 kW to 5 kW system. At SUNPASS Solar, our licensed and experienced solar technicians will take you through the installation process and costs.</p>
                            <p>We offer our services throughout <?= get_the_title() ?> and the surrounding regions. We offer Clean Energy Council approved solar panels and inverters. Besides, we offer products from brands that have a proven industry track record of reliability and performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?>/images/lib/globe-left.png" alt="Globe" class="globe-left">
        </div>
        <div class="container">
            <img src="<?= get_template_directory_uri() ?>/images/lib/solar-panel-demo.jpg" alt="Solar panel demo" class="w-100">
        </div>
        <div class="faq_wrapper">
            <?php get_template_part('parts/section', 'areasFaq'); ?>
        </div>
    </section>

    <section class="section_2">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-6">
                    <div class="heading text-capitalize fw-900 fs-2 text-dark letter-spacing-n212">Backed By a 25-year performace warranty</div>
                    <div class="description">
                        <p>All our solar panel installations are backed by a 25-year performance warranty. Besides, our installations are covered by 3rd-party liability insurance of up to $1,400,000.</p>
                        If you want to discuss your solar system installation, repair, maintenance, or replacement needs with us, call us at 1300 289 218. You may also fill out this online form to get a free quote.
                    </div>
                </div>
                <div class="col-lg">
                    <img src="<?= get_template_directory_uri() ?>/images/lib/solar-test.png" alt="Solar Test" class="w-100">
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>