// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                AOS.init({
                    duration: 1500,
                });
                $(() => {
                    $('#close-slidenav').on('click', function () {
                        $('.slide-nav').removeClass('nav-open');
                    });

                    $('#triggerSlideNav').on('click', function () {
                        $('.slide-nav').addClass('nav-open');
                    });

                    $('.brands_slider').slick({
                        slidesToShow: 8,
                        arrows: false,
                        responsive: [
                            {
                                breakpoint: 1100,
                                settings: {
                                    slidesToShow: 5,
                                    autoplay: true,
                                }
                            },
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 4,
                                    autoplay: true,
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 2,
                                }
                            }
                        ]
                    });

                    AOS.refresh();
                    
                    $(".accordion-head").on('click', function () {
                        $(".accordion-head").removeClass("active");
                        $(this).addClass('active');
                        $('.accordion-card').removeClass('active');
                        $(this).parents('.accordion-card').addClass('active');

                        if ($('.accordion-body').is(':visible')) {
                            $(".accordion-body").slideUp(300);
                            $(".plusminus").html('<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2417 7.92216H10.4997V2.18014C10.4997 1.79942 10.3485 1.43429 10.0793 1.16508C9.81006 0.895869 9.44493 0.744629 9.06421 0.744629C8.68349 0.744629 8.31836 0.895869 8.04915 1.16508C7.77994 1.43429 7.6287 1.79942 7.6287 2.18014V7.92216H1.88668C1.50596 7.92216 1.14083 8.0734 0.871622 8.34261C0.602412 8.61182 0.451172 8.97695 0.451172 9.35767C0.451172 9.73839 0.602412 10.1035 0.871622 10.3727C1.14083 10.6419 1.50596 10.7932 1.88668 10.7932H7.6287V16.5352C7.6287 16.9159 7.77994 17.281 8.04915 17.5503C8.31836 17.8195 8.68349 17.9707 9.06421 17.9707C9.44493 17.9707 9.81006 17.8195 10.0793 17.5503C10.3485 17.281 10.4997 16.9159 10.4997 16.5352V10.7932H16.2417C16.6225 10.7932 16.9876 10.6419 17.2568 10.3727C17.526 10.1035 17.6772 9.73839 17.6772 9.35767C17.6772 8.97695 17.526 8.61182 17.2568 8.34261C16.9876 8.0734 16.6225 7.92216 16.2417 7.92216Z" fill="#1E1E23"/></svg>');
                        }
                        if ($(this).next(".accordion-body").is(':visible')) {
                            $(this).next(".accordion-body").slideUp(300);
                            $(this).children(".plusminus").html('<svg width="18" height="4" viewBox="0 0 18 4" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2417 3.84123H1.88668C1.50596 3.84123 1.14083 3.68999 0.871622 3.42078C0.602412 3.15157 0.451172 2.78644 0.451172 2.40572C0.451172 2.025 0.602412 1.65987 0.871622 1.39067C1.14083 1.12146 1.50596 0.970215 1.88668 0.970215H16.2417C16.6225 0.970215 16.9876 1.12146 17.2568 1.39067C17.526 1.65987 17.6772 2.025 17.6772 2.40572C17.6772 2.78644 17.526 3.15157 17.2568 3.42078C16.9876 3.68999 16.6225 3.84123 16.2417 3.84123Z" fill="white"/></svg>');
                        } else {
                            $(this).next(".accordion-body").slideDown(300);
                            $(this).children(".plusminus").html('<svg width="18" height="4" viewBox="0 0 18 4" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2417 3.84123H1.88668C1.50596 3.84123 1.14083 3.68999 0.871622 3.42078C0.602412 3.15157 0.451172 2.78644 0.451172 2.40572C0.451172 2.025 0.602412 1.65987 0.871622 1.39067C1.14083 1.12146 1.50596 0.970215 1.88668 0.970215H16.2417C16.6225 0.970215 16.9876 1.12146 17.2568 1.39067C17.526 1.65987 17.6772 2.025 17.6772 2.40572C17.6772 2.78644 17.526 3.15157 17.2568 3.42078C16.9876 3.68999 16.6225 3.84123 16.2417 3.84123Z" fill="white"/></svg>');
                        }
                    });

                    if ($(".arealist:visible").length)
                        $(".noresult").hide();
                    else
                        $(".noresult").show();

                    $(".areas_loadMoreBtn").on('click', function () {
                        $(".arealist").show();
                        $(".areas_loadMoreWrap").remove();
                    });

                    $(".areas_alphabet").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        let chr = $(this).text();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        $(".areas_loadMoreWrap").remove();

                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    });
                    $(".areas_allSearch").on('click', function () {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").show();
                        $(".arealist").show();
                        $(".noresult").hide();
                    });


                    $('.arealist ul').each(function () {
                        var max = 19
                        if ($(this).find("li").length > max) {
                            $(this)
                                .find('li:gt(19)')
                                .hide()
                                .end()
                                .append(
                                    $('<li class="show-more mt-3">Show More</li>').click(function () {
                                        $(this).siblings(':hidden').show().end().remove();
                                    })
                                );
                        }
                    });

                    $('.areas_droplist > .caption').on('click', function () {
                        $(this).parent().toggleClass('open');
                    });

                    $('.areas_droplist > .list > .item').on('click', function () {
                        $('.areas_droplist > .list > .item').removeClass('active selected');
                        $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
                    });


                    const slideValue = $('.sliderValue');
                    const inputSlider = $('.field input');
                    inputSlider.on('input', function() {
                        let value = inputSlider.val();
                        slideValue.html(value);
                        slideValue.css('left', (value*(96/60)) + "%");
                    });

                    $("#rebateCalc_submit").on('click',function() {
                        let state = $('#rebateCalc_state').val();
                        let postcode = $('#rebateCalc_postcode').val();
                        let period = $('#rebateCalc_period').val();
                        let energyUse = $('#rebateCalc_energyUse').val();
                        let solution = $('#rebateCalc_solution').val();

                        if(!state || !postcode || !period || !solution){
                            $("#rebateCalc_alert").slideDown();
                        } else {
                            $("#rebateCalc_alert").slideUp();
                        }
                    });
                });
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
        jQuery('#back-top').fadeIn();
        jQuery("#back-top").addClass('active');
    } else {
        jQuery('#back-top').fadeOut();
        jQuery("#back-top").removeClass('active');
    }
});
jQuery('#back-top').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 1000);
    return false;
});
