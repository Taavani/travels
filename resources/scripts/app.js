/**
 * External Dependencies
 */

import 'jquery';
import 'jquery-form'
import './vendor/RDInputLabel';
import 'rd-navbar/dist/js/jquery.rd-navbar';
import lightGallery from 'lightgallery';

$(document).ready(() => {

    // Initialize defaults
    let userAgent = navigator.userAgent.toLowerCase();
    let initialDate = new Date();
    let $document = $(document);
    let $window = $(window);
    let $html = $("html");
    let $body = $("body");

    // Preform checks
    let isDesktop = $html.hasClass("desktop");
    let isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
    let isRtl = $html.attr("dir") === "rtl";
    let isIE = userAgent.indexOf("msie") !== -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") !== -1 ? 11 : userAgent.indexOf("edge") !== -1 ? 12 : false;
    let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    // let isNoviBuilder = false;
    let windowReady = false;

    // Load plugins
    let plugins = {
        // bootstrapTooltip: $('[data-toggle="tooltip"]'),
        // bootstrapModalDialog: $('.modal'),
        // bootstrapTabs: $('.tabs-custom'),
        rdNavbar: $('.rd-navbar'),
        // maps: $('.google-map-container'),
        rdMailForm: $('.rd-mailform'),
        rdInputLabel: $('.form-label'),
        regula: $('[data-constraints]'),
        // mailchimp: $('.mailchimp-mailform'),
        // campaignMonitor: $('.campaign-mailform'),
        // captcha: $('.recaptcha'),
        // owl: $('.owl-carousel'),
        // swiper: $('.swiper-slider'),
        // search: $('.rd-search'),
        // searchResults: $('.rd-search-results'),
        // isotope: $('.isotope'),
        // popover: $('[data-toggle="popover"]'),
        // viewAnimate: $('.view-animate'),
        // radio: $('input[type="radio"]'),
        // checkbox: $('input[type="checkbox"]'),
        // customToggle: $('[data-custom-toggle]'),
        // preloader: $('#page-loader'),
        // flickrfeed: $('.flickr'),
        // selectFilter: $('select'),
        // rdAudioPlayer: $('.rd-audio'),
        // vide: $('.vide_bg'),
        // jPlayerInit: $('.jp-player-init'),
        // slick: $('.slick-slider'),
        // calendar: $('.rd-calendar'),
        // bookingCalendar: $('.booking-calendar'),
        // bootstrapDateTimePicker: $('[data-time-picker]'),
        // facebookWidget: $('#fb-root'),
        // twitterfeed: $('.twitter-timeline'),
        rdRange: $('.rd-range'),
        // stepper: $('input[type="number"]'),
        // customWaypoints: $('[data-custom-scroll-to]'),
        // scroller: $('.scroll-wrap'),
        // materialParallax: $('.parallax-container'),
        // wow: $('.wow'),
        // textRotator: $('.text-rotator'),
        // particles: $('#particles-js'),
        // copyrightYear: $('.copyright-year'),
        // counter: document.querySelectorAll('.counter'),
        // progressLinear: document.querySelectorAll('.progress-linear'),
        // progressCircle: document.querySelectorAll('.progress-circle'),
        // countdown: document.querySelectorAll('.countdown')
    }

    // RD Navbar
    if (plugins.rdNavbar.length) {
        let aliaces, i, j, len, value, values, responsiveNavbar;

        aliaces = ["-", "-sm-", "-md-", "-lg-", "-xl-", "-xxl-"];
        values = [0, 576, 768, 992, 1200, 1600];
        responsiveNavbar = {};

        for (i = j = 0, len = values.length; j < len; i = ++j) {
            value = values[i];
            if (!responsiveNavbar[values[i]]) {
                responsiveNavbar[values[i]] = {};
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'layout')) {
                responsiveNavbar[values[i]].layout = plugins.rdNavbar.attr('data' + aliaces[i] + 'layout');
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'device-layout')) {
                responsiveNavbar[values[i]]['deviceLayout'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'device-layout');
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'hover-on')) {
                responsiveNavbar[values[i]]['focusOnHover'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'hover-on') === 'true';
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'auto-height')) {
                responsiveNavbar[values[i]]['autoHeight'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'auto-height') === 'true';
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up')) {
                responsiveNavbar[values[i]]['stickUp'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up') === 'true';
            }
            if (plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset')) {
                responsiveNavbar[values[i]]['stickUpOffset'] = plugins.rdNavbar.attr('data' + aliaces[i] + 'stick-up-offset');
            }
        }

        plugins.rdNavbar.RDNavbar({
            anchorNav: true,
            stickUpClone: (plugins.rdNavbar.attr("data-stick-up-clone")) ? plugins.rdNavbar.attr("data-stick-up-clone") === 'true' : false,
            responsive: responsiveNavbar,
            callbacks: {
                onStuck: function () {
                    var navbarSearch = this.$element.find('.rd-search input');

                    if (navbarSearch) {
                        navbarSearch.val('').trigger('propertychange');
                    }
                },
                onDropdownOver: function () {
                    return true;
                },
                onUnstuck: function () {
                    if (this.$clone === null) {
                        return;
                    }

                    let navbarSearch = this.$clone.find('.rd-search input');

                    if (navbarSearch) {
                        navbarSearch.val('').trigger('propertychange');
                        navbarSearch.trigger('blur');
                    }
                }
            }
        });

        if (plugins.rdNavbar.attr("data-body-class")) {
            document.body.className += ' ' + plugins.rdNavbar.attr("data-body-class");
        }
    }

    /**
     * RD Input Label
     * @description Enables RD Input Label Plugin
     */
    if (plugins.rdInputLabel.length) {
        plugins.rdInputLabel.RDInputLabel();
    }

    /**
     * RD Mailform
     * @version      3.2.0
     */
    if (plugins.rdMailForm.length) {
        let i, j, k = null;
        const msg = {
            'MF000': 'Successfully sent!',
            'MF255': 'Aw, snap! Something went wrong.'
        };

        for ( const form of plugins.rdMailForm) {
            let $form = $(form);
            $form
                .attr('novalidate', 'novalidate')
                .ajaxForm({
                    beforeSubmit: function (arr, $form, options) {
                        let form = $($form[0]);
                        let inputs = form.find("[data-constraints]"),
                            output = $("#" + form.attr("data-form-output"));

                        output.removeClass("active error success");

                        if (isValidated(inputs)) {
                            form.addClass('form-in-process');

                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>');
                                output.addClass("active");
                            }
                        }
                    },
                    error: function (result) {
                        var output = $("#" + $(plugins.rdMailForm[this.extraData.counter]).attr("data-form-output")),
                            form = $(plugins.rdMailForm[this.extraData.counter]);
                        if (result.responseJSON.errors.email) {
                            output.text(result.responseJSON.errors.email);
                        } else {
                            output.text(msg[result]);
                        }
                        form.removeClass('form-in-process');
                    },
                    success: function (result) {
                        var form = $(plugins.rdMailForm[this.extraData.counter]),
                            output = $("#" + form.attr("data-form-output")),
                            select = form.find('select');

                        form
                            .addClass('success')
                            .removeClass('form-in-process');

                        console.log(result);
                        result = result.length === 5 ? result : 'MF255';
                        output.text(msg[result]);

                        if (result === "MF000") {
                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active success");
                            }
                        } else {
                            if (output.hasClass("snackbars")) {
                                output.html(' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active error");
                            }
                        }

                        form.clearForm();

                        if (select.length) {
                            select.select2("val", "");
                        }

                        form.find('input, textarea').trigger('blur');

                        setTimeout(function () {
                            output.removeClass("active error success");
                            form.removeClass('success');
                        }, 3500);
                    }
                });
        }

        /*
        for (i = 0; i < plugins.rdMailForm.length; i++) {
            let $form = $(plugins.rdMailForm[i])[0],
                formHasCaptcha = false;

            $form
                .attr('novalidate', 'novalidate')
                .ajaxForm({
                    data: {
                        "form-type": $form.attr("data-form-type") || "contact",
                        "counter": i
                    },
                    beforeSubmit: function (arr, $form, options) {
                        let form = $(plugins.rdMailForm[this.extraData.counter]),
                            inputs = form.find("[data-constraints]"),
                            output = $("#" + form.attr("data-form-output")),
                            captcha = form.find('.recaptcha'),
                            captchaFlag = true;

                        output.removeClass("active error success");

                        if (isValidated(inputs, captcha)) {
                            // verify reCaptcha
                            if (captcha.length) {
                                let captchaToken = captcha.find('.g-recaptcha-response').val();
                                let captchaMsg = {
                                    'CPT001': 'Please, setup you "site key" and "secret key" of reCaptcha',
                                    'CPT002': 'Something wrong with google reCaptcha'
                                };

                                formHasCaptcha = true;

                                $.ajax({
                                    method: "POST",
                                    url: "bat/reCaptcha.php",
                                    data: {'g-recaptcha-response': captchaToken},
                                    async: false
                                })
                                .done(function (responceCode) {
                                    if (responceCode !== 'CPT000') {
                                        if (output.hasClass("snackbars")) {
                                            output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + captchaMsg[responceCode] + '</span></p>')

                                            setTimeout(function () {
                                                output.removeClass("active");
                                            }, 3500);

                                            captchaFlag = false;
                                        } else {
                                            output.html(captchaMsg[responceCode]);
                                        }

                                        output.addClass("active");
                                    }
                                });
                            }

                            if (!captchaFlag) {
                                return false;
                            }

                            form.addClass('form-in-process');

                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle fa fa-circle-o-notch fa-spin icon-xxs"></span><span>Sending</span></p>');
                                output.addClass("active");
                            }
                        } else {
                            return false;
                        }
                    },
                    error: function (result) {
                        var output = $("#" + $(plugins.rdMailForm[this.extraData.counter]).attr("data-form-output")),
                            form = $(plugins.rdMailForm[this.extraData.counter]);
                        if (result.responseJSON.errors.email) {
                            output.text(result.responseJSON.errors.email);
                        } else {
                            output.text(msg[result]);
                        }
                        form.removeClass('form-in-process');

                        if (formHasCaptcha) {
                            grecaptcha.reset();
                        }
                    },
                    success: function (result) {
                        var form = $(plugins.rdMailForm[this.extraData.counter]),
                            output = $("#" + form.attr("data-form-output")),
                            select = form.find('select');

                        form
                            .addClass('success')
                            .removeClass('form-in-process');

                        if (formHasCaptcha) {
                            grecaptcha.reset();
                        }
                        console.log(result);
                        result = result.length === 5 ? result : 'MF255';
                        output.text(msg[result]);

                        if (result === "MF000") {
                            if (output.hasClass("snackbars")) {
                                output.html('<p><span class="icon text-middle mdi mdi-check icon-xxs"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active success");
                            }
                        } else {
                            if (output.hasClass("snackbars")) {
                                output.html(' <p class="snackbars-left"><span class="icon icon-xxs mdi mdi-alert-outline text-middle"></span><span>' + msg[result] + '</span></p>');
                            } else {
                                output.addClass("active error");
                            }
                        }

                        form.clearForm();

                        if (select.length) {
                            select.select2("val", "");
                        }

                        form.find('input, textarea').trigger('blur');

                        setTimeout(function () {
                            output.removeClass("active error success");
                            form.removeClass('success');
                        }, 3500);
                    }
                });
            }
        */
    }

    /**
     * isValidated
     * @description  check if all elemnts pass validation
     */
    function isValidated(elements) {
        let results, errors = 0;
        if (elements.length) {
            for (const element in elements) {
                let $input = $(element);
                console.log($input.regula('validate'));
                if ((results = $input.regula('validate')).length) {
                    for (k = 0; k < results.length; k++) {
                        errors++;
                        $input.siblings(".form-validation").text(results[k].message).parent().addClass("has-error");
                    }
                } else {
                    $input.siblings(".form-validation").text("").parent().removeClass("has-error")
                }
            }
            return errors === 0;
        }
        return true;
    }

    lightGallery(document.getElementById('lg-gallery'), {
        selector: '.thumb-modern'
    });

    // Scroll on page
    // Add data-scroll to navbar
    $('.rd-navbar-brand a').each(function () {
        $(this).attr('data-scroll', '');
    })
    $('.rd-navbar-nav .menu-item a').each(function () {
        $(this).attr('data-scroll', '');
    })

    //
    let elements = document.querySelectorAll('[data-scroll]')
    elements.forEach(function (element) {
        $(element).click(function (event) {
            event.preventDefault()
            let full_url = this.href;

            let parts = full_url.split("#");
            let trgt = parts[1];

            let target_offset = $("#" + trgt).offset().top;

            $('html, body').animate({scrollTop: target_offset}, 600);
        })
    })
});

