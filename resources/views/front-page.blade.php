@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="swiper-container swiper-slider swiper-slider_fullheight swiper-container-initialized swiper-container-horizontal"
             data-simulate-touch="false" data-loop="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide_top bg-accent swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev"
                     data-slide-bg="images/main/3-2400.tiff" data-swiper-slide-index="0"
                     style="background-image: url({{ $firstImage }});">
                    <div class="swiper-slide-caption">
                        <div class="container text-center">
                            <h2>
                                Looking for a Greenlandic adventure?<br class="d-none d-lg-block">
                            </h2>
                            <p>
                                <a href="{{ $siteUrl }}">#TravelsToGreenland</a> is here to help you on
                                your way.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div style="position: relative;top: -40px;z-index: 1;color: white;padding-right: 20px;float: right;">Photo by
            Klaus Eugenius - Visit Greenland
        </div>
    </section>
    <section id="introduction" class="section novi-bg novi-bg-img section-xl bg-default text-center">
        <div class="container">
            <div class="row row-fix justify-content-lg-center">
                <div class="col-lg-10 col-xl-8">
                    <p>Let us help you</p>

                    <h4>We will create a tailored adventure for you</h4>

                    <p>
                        It can be quite a challenge to find and get in contact with all the local tour
                        operators,
                        combining flights, boats and accommodation in order to create an unforgettable
                        adventure in
                        Greenland. We are ready to help you through these struggles.
                    </p>

                    <h4>Our products</h4>

                    <p>
                        We currently offer two different services upon your travel to Greenland.
                    </p>

                    <div class="group-lg">
                        <a href="#product-feedback" data-scroll class="button button-primary">
                            Feedback on existing itinerary
                        </a>
                        <a href="#product-itinerary" data-scroll class="button button-primary">
                            Your custom itinerary
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product-feedback" class="section novi-bg novi-bg-img section-xl text-center bg-accent">
        <div class="container">
            <div class="row row-fix justify-content-lg-center">
                <div class="col-md-8 text-center">
                    <h4>Feedback on existing itinerary</h4>
                </div>
            </div>
            <div class="row row-30">
                <div class="col-md-8 text-left">
                    <p>
                        You may already have booked and planned your travel to Greenland either with a
                        travel
                        agency
                        or by your selves.
                    </p>

                    <p>
                        In both cases we are more than happy to go through the itinerary to see if we
                        believe
                        something has been missed or to tip you with additional tours or experiences,
                        that we
                        think you cannot be allowed to miss, when travelling in Greenland.
                    </p>

                    <h5>
                        How it works:
                    </h5>

                    <ul class="list-marked">
                        <li class="text-white">You forward us the entire itinerary and we look
                            through and return with our feedback
                            within 72 hours.
                        </li>
                        <li class="text-white">You are allowed two follow-up e-mails with questions
                            about your itinerary
                            feedback.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="my-auto">
                        <div class="pricing-table">
                            <div class="pricing-label"><span></span>
                                <svg width="86px" height="86px" viewBox="0 0 86 86">
                                    <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                </svg>
                            </div>
                            <div class="pricing-header">
                                <h5>Feedback on existing itinerary</h5>
                                <div class="price">
                                    <span class="text-white">$80</span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="pricing-footer">
                                <a class="button button-primary" data-scroll href="#contact-us">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product-itinerary" class="section novi-bg novi-bg-img section-xl bg-default text-center">
        <div class="container">
            <h4>Your custom itinerary</h4>
            <div class="row row-30">
                <div class="col-md-8 text-left">

                    <p>
                        This product is for you, who would really love to visit Greenland, but has no
                        interest in
                        purchasing a standard package from a travel agency although you:
                    </p>

                    <ul class="list-marked">
                        <li>prefer to enjoy an incredible vacation without having to worry about the
                            stress of
                            researching.
                        </li>
                        <li>struggle to find the time to do the proper research in order to create a
                            personal and
                            unique journey to Greenland.
                        </li>
                        <li>have begun research about Greenland, but you find it really difficult to
                            collect all the
                            information you would prefer.
                        </li>
                        <li>appreciate someone has done the research and created a simple itinerary to
                            follow in
                            Greenland.
                        </li>
                    </ul>

                    <p>
                        We completely understand you and your needs. We have been in the same situation
                        multiple
                        times and we are ready to assists you as we plan your travel to Greenland.
                    </p>

                    <h5>
                        How it works:
                    </h5>

                    <ul class="list-marked">
                        <li>
                            Ideally you contact us 5-6 months prior to your arrival in Greenland and you
                            share with
                            us your dreams for your Greenlandic adventure.
                        </li>
                        <li>
                            Based on your dreams we use a couple of weeks to plan and arrange your
                            adventure; the
                            planning process is done in collaboration with you as the narrow down the
                            different
                            options.
                        </li>
                        <li>
                            We finalize the itinerary and make sure that everything is doable as well as
                            including
                            all contacts for accommodations, tour operators, local guides and
                            intorductions to each
                            of the places you are visiting.
                        </li>
                    </ul>

                    <h5>
                        What we don't do:
                    </h5>

                    <ul class="list-marked">
                        <li>
                            We don't book or pay for your trip instead we connect you directly to the
                            local tours
                            guides, the dogsled driver, the captain of your boat and so forth and any
                            financially
                            transaction is between you and the operator.
                        </li>
                        <li>
                            We leave you with all the details in order for you to confirm
                            accommodations, flights
                            and tours yourselves. This is also to secure that all payments go directly
                            to the local
                            operators to benefit the development of their business.
                        </li>
                        <li>Lastly, we do not control the weather. Hence, we can’t guarantee that
                            everything being
                            planned in the itinerary can be done, but we guarantee you will never forget
                            Greenland
                            once you have stepped on this magic island.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="my-auto">
                        <div class="pricing-table">
                            <div class="pricing-label">
                                <svg width="86px" height="86px" viewBox="0 0 86 86">
                                    <path d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                </svg>
                            </div>
                            <div class="pricing-header">
                                <h5>Your custom itinerary</h5>
                                <div class="price">
                                    <span>$300</span>
                                    <span>/itinerary</span>
                                </div>
                            </div>
                            <div class="pricing-footer">
                                <a class="button button-primary" data-scroll href="#contact-us">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="meet-the-locals" class="section novi-bg bg-gray-lighter object-wrap">
        <div class="section-xxl section-xxl_bigger">
            <div class="container">
                <div class="row row-fix">
                    <div class="col-lg-5">
                        <h3>We will connect you with the locals</h3>
                        <p>
                            Our itinerary is based on your wishes and the availability of the local
                            tour operators. This way you get to support and experience the local
                            community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="novi-bg-img object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image"
             style="background-image: url({{ $localsImage }})">
        </div>
        <div style="position: relative;top: -40px;color: white;padding-right: 20px;float: right;height: 0;">Photo
            by Mads Pihl - Visit Greenland
        </div>
    </section>
    <section id="the-seasons-are-changing" class="section novi-bg novi-bg-img section-xl bg-accent">
        <div class="container">
            <div class="row row-fix justify-content-md-center flex-lg-row-reverse align-items-lg-center justify-content-lg-between row-50">
                <div class="col-md-9 col-lg-5">
                    <h3>The seasons are changing</h3>
                    <p>
                        There is a Greenlandic experience for every season, whether it is dog sledding, whale
                        watching,
                        mountain climbing or just experiencing the greenlandic culture.
                    </p>
                </div>
                <div class="col-md-9 col-lg-6" data-lightgallery="group">
                    <div class="row gallery-wrap">
                        <div class="col-6">
                            <a class="thumb-modern" data-sub-html="Photo by Ben Haggar - Visit Greenland"
                               data-lightgallery="item" href="{{ $firstSeasonsGalleryImage }}">
                                <figure>
                                    <img src="{{ $firstSeasonsPlaceholderImage }}" alt="" width="472" height="355">
                                </figure>
                                <div class="thumb-modern__overlay"></div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="thumb-modern" data-lightgallery="item"
                               data-sub-html="Photo by Chris Brin Lee Jr. - Visit Greenland"
                               href="{{ $secondSeasonsGalleryImage }}">
                                <figure><img src="{{ $secondSeasonsPlaceholderImage }}" alt="" width="472" height="355">
                                </figure>
                                <div class="thumb-modern__overlay"></div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="thumb-modern" data-lightgallery="item"
                               data-sub-html="Photo by Mads Pihl - Visit Greenland"
                               href="{{ $thirdSeasonsGalleryImage }}">
                                <figure><img src="{{ $thirdSeasonsPlaceholderImage }}" alt="" width="472" height="355">
                                </figure>
                                <div class="thumb-modern__overlay"></div>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="thumb-modern" data-lightgallery="item"
                               data-sub-html="Photo by Mads Pihl - Visit Greenland"
                               href="{{ $forthSeasonsGalleryImage }}">
                                <figure><img src="{{ $forthSeasonsPlaceholderImage }}" alt="" width="472" height="355">
                                </figure>
                                <div class="thumb-modern__overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.contact-form')
@endsection
