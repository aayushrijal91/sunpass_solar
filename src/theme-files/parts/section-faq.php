<div class="faq" data-aos="fade-up">
    <div class="container">
        <div class="accordion-container">
            <?php if (have_rows('faq')) :
                while (have_rows('faq')) : the_row();
                    $index = 1;
                    $button_1 = get_sub_field('button_1');
                    $button_2 = get_sub_field('button_2');

                    if (have_rows('faq_list')) :
                        while (have_rows('faq_list')) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
            ?>
                            <div class="accordion-card">
                                <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                    <div class="main-question"><?= $question ?></div>
                                    <div class="plusminus">
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
                                <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                    <?= $answer ?>

                                    <div class="row pt-4 pt-lg-5">
                                        <div class="col-auto">
                                            <a href="<?= isset($button_1['url']) ? $button_1['url'] : '#' ?>" class="btn btn-orange text-white px-4"><?= isset($button_1['title']) ? $button_1['title'] : 'Learn More' ?></a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= isset($button_2['url']) ? $button_2['url'] : '#' ?>" class="btn btn-white bordered border-orange text-orange px-4"><?= isset($button_2['title']) ? $button_2['title'] : 'Get Started' ?></a>
                                        </div>
                                    </div>
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
</div>