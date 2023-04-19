<?php
/*
 * Template Name: Government Rebates
 * Government Rebates page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'brighte');
?>

<div class="governmentRebates_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="fs-64 text-dark fw-700 lh-1 heading"><?= $section_1['title'] ?></div>
                </div>
                <div class="col">
                    <div class="description text-light-grey lh-7">
                        <?= $section_1['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row gx-xl-6">
                        <div class="col-6">
                            <div class="text-dark fs-70 fw-800 lh-1 heading pb-5"><?= $section_2['title'] ?></div>
                            <div class="description text-light-grey fs-20 lh-8 pb-4">
                                <?= $section_2['description'] ?>
                            </div>

                            <div class="accordion-container">
                                <?php if (have_rows('section_2')) :
                                    while (have_rows('section_2')) : the_row();
                                        $index = 1;

                                        if (have_rows('list')) :
                                            while (have_rows('list')) : the_row();
                                                $question = get_sub_field('question');
                                                $answer = get_sub_field('answer');
                                ?>
                                                <div class="accordion-card<?= ($index == 1) ? " active" : ""; ?>">
                                                    <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                                        <div class="row g-0 w-100 justify-content-between">
                                                            <div class="col h-inherit">
                                                                <div class="main-question"><?= $question ?></div>
                                                            </div>
                                                            <div class="col-auto h-inherit">
                                                                <div class="plusminus h-100">
                                                                    <?php if ($index == 1) { ?>
                                                                        <svg width="18" height="4" viewBox="0 0 18 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M16.2417 3.84123H1.88668C1.50596 3.84123 1.14083 3.68999 0.871622 3.42078C0.602412 3.15157 0.451172 2.78644 0.451172 2.40572C0.451172 2.025 0.602412 1.65987 0.871622 1.39067C1.14083 1.12146 1.50596 0.970215 1.88668 0.970215H16.2417C16.6225 0.970215 16.9876 1.12146 17.2568 1.39067C17.526 1.65987 17.6772 2.025 17.6772 2.40572C17.6772 2.78644 17.526 3.15157 17.2568 3.42078C16.9876 3.68999 16.6225 3.84123 16.2417 3.84123Z" fill="white" />
                                                                        </svg>
                                                                    <?php } else { ?>
                                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M16.2417 7.92216H10.4997V2.18014C10.4997 1.79942 10.3485 1.43429 10.0793 1.16508C9.81006 0.895869 9.44493 0.744629 9.06421 0.744629C8.68349 0.744629 8.31836 0.895869 8.04915 1.16508C7.77994 1.43429 7.6287 1.79942 7.6287 2.18014V7.92216H1.88668C1.50596 7.92216 1.14083 8.0734 0.871622 8.34261C0.602412 8.61182 0.451172 8.97695 0.451172 9.35767C0.451172 9.73839 0.602412 10.1035 0.871622 10.3727C1.14083 10.6419 1.50596 10.7932 1.88668 10.7932H7.6287V16.5352C7.6287 16.9159 7.77994 17.281 8.04915 17.5503C8.31836 17.8195 8.68349 17.9707 9.06421 17.9707C9.44493 17.9707 9.81006 17.8195 10.0793 17.5503C10.3485 17.281 10.4997 16.9159 10.4997 16.5352V10.7932H16.2417C16.6225 10.7932 16.9876 10.6419 17.2568 10.3727C17.526 10.1035 17.6772 9.73839 17.6772 9.35767C17.6772 8.97695 17.526 8.61182 17.2568 8.34261C16.9876 8.0734 16.6225 7.92216 16.2417 7.92216Z" fill="#1E1E23" />
                                                                        </svg>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                                        <?= $answer ?>
                                                    </div>
                                                </div>
                                <?php
                                                $index++;
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="fs-60 fw-700"><?= $section_3['title'] ?></div>
                    <div class="description"><?= $section_3['description'] ?></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4">
        <?php $section_4 = get_field('section_4'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <img src="<?= $section_4['image']['url'] ?>" alt="<?= $section_4['image']['alt'] ?>">
                        </div>
                        <div class="col-6">
                            <div class="py-5">
                                <div class="fs-70 lh-1 fw-900 ls-n1_85"><?= $section_4['title'] ?></div>
                                <div class="description"><?= $section_4['description'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_5">
        <?php $section_5 = get_field('section_5'); ?>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="heading fs-70 lh-1 fw-700"><?= $section_5['title'] ?></div>
                    <div class="description">
                        <?= $section_5['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_6">
        <?php $section_6 = get_field('section_6'); ?>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="heading text-capitalize fs-70 fw-700 lh-1"><?= $section_6['title'] ?></div>
                        </div>
                    </div>

                    <div class="description fs-20 text-light-grey"><?= $section_6['description_1'] ?></div>

                    <div class="row justify-content-center pt-4 g-3">
                        <?php
                        if (have_rows('section_6')) :
                            while (have_rows('section_6')) : the_row();
                                if (have_rows('list')) :
                                    while (have_rows('list')) : the_row();
                        ?>
                                        <div class="col-md-3">
                                            <div class="program_card">
                                                <?= get_sub_field('text') ?>
                                            </div>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>

                    <div class="description fs-20 text-light-grey"><?= $section_6['description_2'] ?></div>
                    <div class="pt-5"><img src="<?= get_template_directory_uri() ?>/images/lib/bordered-solarpanels.png" alt="bordered Solar panel" class="w-100"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>