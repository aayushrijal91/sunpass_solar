<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner_home');
?>

<div class="homepage">
    <section class="section_1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="<?= get_field('section_1')['hero_logo']['url'] ?>" alt="<?= get_field('section_1')['hero_logo']['alt'] ?>">
                    <div class="description pt-5 text-white fs-21 line-height-2">
                        <?= get_field('section_1')['description'] ?>
                    </div>
                    <?php if (have_rows('section_1')) :
                        while (have_rows('section_1')) : the_row();
                            $index = 1;
                            if (have_rows('description_list')) :
                                while (have_rows('description_list')) : the_row();
                                    $title = get_sub_field('title');
                                    $description = get_sub_field('description');
                    ?>
                                    <div class="row pt-5">
                                        <div class="col-auto">
                                            <div class="serial_no"><?= $index ?></div>
                                        </div>
                                        <div class="col text-white">
                                            <div class="fs-20 text-capitalize"><?= $title ?></div>
                                            <div class="fs-23 line-height-2 pt-3"><?= $description ?></div>
                                        </div>
                                    </div>
                    <?php
                                    $index++;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?= get_field("section_1")['image']['url'] ?>" alt="<?= get_field("section_1")['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>