import {registerBlockType} from '@wordpress/blocks';
import domReady from '@wordpress/dom-ready';

domReady(function () {

    let __ = window.wp.i18n.__;

    registerBlockType(
        'travels/local-connection',
        {
            title: __('Local connection', 'travels'),
            icon: 'dashicons-align-wide',
            category: 'layout',
            example: {},
            edit: function ( props ) {
                return (
                    <section id="meet-the-locals" className="section novi-bg bg-gray-lighter object-wrap">
                        <div className="section-xxl section-xxl_bigger">
                            <div className="container">
                                <div className="row row-fix">
                                    <div className="col-lg-5">
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
                        <div
                            className="novi-bg-img object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image"
                            style="background-image: url('images/locals/2-2400.jpg')">
                        </div>
                        <div
                            style="position: relative;top: -40px;color: white;padding-right: 20px;float: right;height: 0;">Photo
                            by Mads Pihl - Visit Greenland
                        </div>
                    </section>

                );
            },
            save: function ( props ) {
                return (
                    <section id="meet-the-locals" className="section novi-bg bg-gray-lighter object-wrap">
                        <div className="section-xxl section-xxl_bigger">
                            <div className="container">
                                <div className="row row-fix">
                                    <div className="col-lg-5">
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
                        <div
                            className="novi-bg-img object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image"
                            style="background-image: url('images/locals/2-2400.jpg')">
                        </div>
                        <div
                            style="position: relative;top: -40px;color: white;padding-right: 20px;float: right;height: 0;">Photo
                            by Mads Pihl - Visit Greenland
                        </div>
                    </section>

                );
            }
        }
    )
})