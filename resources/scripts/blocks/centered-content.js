/**
 * Hello World: Step 1
 *
 * Simple block, renders and saves the same content without interactivity.
 *
 * Using inline styles - no external stylesheet needed.  Not recommended
 * because all of these styles will appear in `post_content`.
 */

import {registerBlockType} from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';

domReady(function () {

    let blocks = window.wp.blocks;
    let __ = window.wp.i18n.__;
    let element = window.wp.element;

    let el = element.createElement;

    let blockStyle = {
        backgroundColor: '#900',
        color: '#fff',
        padding: '20px',
    };

    registerBlockType(
        'travels/centered-content',
        {
            title: __('Centered content', 'travels'),
            icon: 'universal-access-alt',
            category: 'layout',
            example: {},
            edit: function ( props ) {
                return (
                    <section className="section novi-bg novi-bg-img section-xl bg-default text-center"
                             id="introduction">
                        <div className="container">
                            <div className="row row-fix justify-content-lg-center">
                                <div className="col-lg-10 col-xl-8">
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
                                    <div className="group-lg">
                                        <a href="#product-feedback" className="button button-primary">Feedback on
                                            existing itinerary
                                        </a>
                                        <a href="#product-itinerary" className="button button-primary">Your custom
                                            itinerary</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                );
            },
            save: function ( props ) {
                return (
                    <section className="section novi-bg novi-bg-img section-xl bg-default text-center"
                             id="introduction">
                        <div className="container">
                            <div className="row row-fix justify-content-lg-center">
                                <div className="col-lg-10 col-xl-8">
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
                                    <div className="group-lg">
                                        <a href="#product-feedback" className="button button-primary">Feedback on
                                            existing itinerary
                                        </a>
                                        <a href="#product-itinerary" className="button button-primary">Your custom
                                            itinerary</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                );
            },
        });
})
