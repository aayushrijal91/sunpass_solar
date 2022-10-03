<?php $brands = get_field('brands', 'options'); ?>
<div class="brands" data-aos="fade-up">
    <div class="container">
        <div class="row gx-2 align-items-center pb-5">
            <div class="col-auto d-flex align-items-center">
                <div class="heading"><?= $brands['heading'] ?></div>
                <a href="<?= $brands['button']['url'] ?>" class="button px-1"><?= $brands['button']['title'] ?></a>
            </div>
            <div class="col">
                <div class="horizontal_line"></div>
            </div>
        </div>
        <div class="brands_slider">
            <?php if (have_rows('brands', 'options')) :
                while (have_rows('brands', 'options')) : the_row();
                    if (have_rows('logos')) :
                        while (have_rows('logos')) : the_row();
                            $logo =  get_sub_field('logo');
            ?>
                            <div>
                                <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
                            </div>
            <?php endwhile;
                    endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>