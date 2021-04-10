import {registerBlockType} from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';

domReady(function () {

    let __ = window.wp.i18n.__;

    registerBlockType(
        'travels/new-itinerary',
        {
            title: __('New itinerary', 'travels'),
            icon: 'dashicons-align-wide',
            category: 'layout',
            example: {},
            edit: function ( props ) {
                return (
                    <section id="product-itinerary"
                             className="section novi-bg novi-bg-img section-xl bg-default text-center">
                        <div className="container">
                            <h4>Your custom itinerary</h4>
                            <div className="row row-30">
                                <div className="col-md-8 text-left">
                                    <p>
                                        This product is for you, who would really love to visit Greenland, but has no
                                        interest in
                                        purchasing a standard package from a travel agency although you:
                                    </p>
                                    <ul className="list-marked">
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
                                    <ul className="list-marked">
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
                                    <p/>
                                    <h5>
                                        What we don't do:
                                    </h5>
                                    <ul className="list-marked">
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
                                <div className="col-md-4">
                                    <div className="my-auto">
                                        <div className="pricing-table">
                                            <div className="pricing-label"><span></span>
                                                <svg width="86px" height="86px" viewBox="0 0 86 86">
                                                    <path
                                                        d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                                </svg>
                                            </div>
                                            <div className="pricing-header">
                                                <h5>Your custom itinerary</h5>
                                                <div className="price"><span>$300</span><span>/itinerary</span></div>
                                            </div>
                                            <div className="pricing-footer"><a className="button button-primary"
                                                                               href="#contact-us">Contact
                                                us</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                );
            },
            save: function ( props ) {
                return (
                    <section id="product-itinerary"
                             className="section novi-bg novi-bg-img section-xl bg-default text-center">
                        <div className="container">
                            <h4>Your custom itinerary</h4>
                            <div className="row row-30">
                                <div className="col-md-8 text-left">
                                    <p>
                                        This product is for you, who would really love to visit Greenland, but has no
                                        interest in
                                        purchasing a standard package from a travel agency although you:
                                    </p>
                                    <ul className="list-marked">
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
                                    <ul className="list-marked">
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
                                    <p/>
                                    <h5>
                                        What we don't do:
                                    </h5>
                                    <ul className="list-marked">
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
                                <div className="col-md-4">
                                    <div className="my-auto">
                                        <div className="pricing-table">
                                            <div className="pricing-label"><span></span>
                                                <svg width="86px" height="86px" viewBox="0 0 86 86">
                                                    <path
                                                        d="M73.4,73.4L67.3,73l-0.8,6.2l-6-1.8l-2.1,5.9l-5.5-3l-3.2,5.3l-4.7-4L40.7,86L37,81.1l-5.1,3.5L29.2,79            l-5.7,2.4l-1.4-6l-6.1,1.1l-0.2-6.2l-6.2-0.2l1.1-6.1l-6-1.4L7,56.8l-5.6-2.7L4.9,49L0,45.3L4.5,41l-4-4.7L5.8,33l-3-5.5l5.9-2.1            l-1.8-6l6.2-0.8l-0.5-6.2l6.2,0.5l0.8-6.2l6,1.8l2.1-5.9l5.5,3l3.2-5.3l4.7,4L45.3,0L49,4.9l5.1-3.5L56.8,7l5.7-2.4l1.4,6l6.1-1.1            l0.2,6.2l6.2,0.2L75.3,22l6,1.4L79,29.2l5.6,2.7L81.1,37l4.9,3.8L81.5,45l4,4.7L80.2,53l3,5.5l-5.9,2.1l1.8,6L73,67.3L73.4,73.4z"></path>
                                                </svg>
                                            </div>
                                            <div className="pricing-header">
                                                <h5>Your custom itinerary</h5>
                                                <div className="price"><span>$300</span><span>/itinerary</span></div>
                                            </div>
                                            <div className="pricing-footer"><a className="button button-primary"
                                                                               href="#contact-us">Contact
                                                us</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                );
            }
        }
    )
})