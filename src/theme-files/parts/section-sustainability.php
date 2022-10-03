<div class="sustainability">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="fs-6 fw-700 letter-spacing-n199"><?= get_field('sustainability', 'options')['title'] ?></div>
                <div class="fs-20 fw-700 text-orange pt-4"><?= get_field('sustainability', 'options')['subtitle'] ?></div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <?php if (have_rows('sustainability', 'options')) :
                    while (have_rows('sustainability', 'options')) : the_row();
                        if (have_rows('description', 'options')) :
                            while (have_rows('description', 'options')) : the_row();
                                $icon = get_sub_field('icon');
                                $text = get_sub_field('text');
                ?>

                                <div class="row py-3">
                                    <div class="col-auto"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>"></div>
                                    <div class="col description_text"><?= $text ?></div>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>