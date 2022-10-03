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
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="text-center text-secondary fs-13 line-height-1">System Calculator</div>
                <hr>
            </div>
            <div class="col-lg-8">
                <div class="solar-rebate-calculator">
                    <div class="alert alert-danger text-center mb-5" role="alert" id="rebateCalc_alert">
                        One or more fields are empty. Please check and try again!
                    </div>
                    <div class="row justify-content-center align-items-end gy-4 gy-md-0 gx-3">
                        <div class="col-md-4">
                            <div class="input_wrapper">
                                <label>Your Location</label>
                                <select id="rebateCalc_state" class="form-control form-select">
                                    <option selected disabled>State</option>
                                    <option>NSW</option>
                                    <option>ACT</option>
                                    <option>Victoria</option>
                                    <option>NT</option>
                                    <option>Tasmania</option>
                                    <option>Queensland</option>
                                    <option>WA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input_wrapper">
                                <input type="number" id="rebateCalc_postcode" class="form-control" placeholder="Post Code">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="input_wrapper">
                                <label>Electricity is mainly used during the</label>
                                <select id="rebateCalc_period" class="form-control form-select">
                                    <option selected disabled>Select Period</option>
                                    <option>Day</option>
                                    <option>Night</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center pt-5 pb-4">
                        <div class="col-12">
                            <div class="input_wrapper text-center">
                                <label>My average daily peak energy usage in the last 12 months is</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="range">
                                <div class="sliderValue">
                                    0
                                </div>
                                <div class="field">
                                    <input type="range" id="rebateCalc_energyUse" min="0" max="60" value="0" steps="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">kWhs Per Day</div>
                    </div>
                    <div class="row justify-content-center gy-4">
                        <div class="col-lg-8 col-xl-6">
                            <div class="input_wrapper text-center">
                                <label>and I want a solution that is sized for</label>
                                <select id="rebateCalc_solution" class="form-control form-select">
                                    <option selected>The Best Return On Investment</option>
                                    <option>Solar Plus Battery Storage</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <button id="rebateCalc_submit" type="submit" class="submit_button">Calculate Rebate</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row gy-5 gy-lg-0 gx-xl-5">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="row justify-content-end">
                                <div class="col-xxl-10">
                                    <div class="heading text-dark text-capitalize fw-900 fs-2 letter-spacing-n212 line-height-1"><?= $section_1['title'] ?></div>
                                    <div class="description"><?= $section_1['description'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>