<?php
/*
 * Template Name: FAQs
 * FAQs page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="faq_page">
    <div class="faq_wrapper">
        <img src="<?= get_template_directory_uri() ?>/images/lib/sunpass-passport.png" alt="Sunpass Passport" class="sunpass_passport">
        <?php get_template_part('parts/section', 'faq'); ?>
    </div>

    <div class="brands_wrapper text-light-grey">
        <?php get_template_part('parts/section', 'brands'); ?>
    </div>
</div>

<?php get_footer(); ?>