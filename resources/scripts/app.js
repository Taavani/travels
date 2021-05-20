/**
 * External Dependencies
 */

import 'jquery'
import 'rd-navbar/dist/js/jquery.rd-navbar';

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
        // rdMailForm: $('.rd-mailform'),
        // rdInputLabel: $('.form-label'),
        // regula: $('[data-constraints]'),
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
        // lightGallery: $('[data-lightgallery="group"]'),
        // lightGalleryItem: $('[data-lightgallery="item"]'),
        // lightDynamicGalleryItem: $('[data-lightgallery="dynamic"]'),
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
        // rdRange: $('.rd-range'),
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

