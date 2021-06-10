@extends('layouts.app')

@section('content')
    <section class="section novi-bg novi-bg-img breadcrumbs-custom">
        <div class="container">
            <div class="breadcrumbs-custom__inner">
                <p class="breadcrumbs-custom__title">About</p>
            </div>
        </div>
    </section>
    <section class="section parallax-container text-center parallax-header context-dark" data-parallax-img="{{ $backgroundImage }}">
        <div class="material-parallax parallax">
            <img src="{{ $backgroundImage }}" alt="" >
        </div>
        <div class="parallax-content" style="background: rgba(0, 0, 0, 0.5);">
            <div class="parallax-header__inner">
                <div class="parallax-header__content">
                    <div class="container">
                        <div class="row row-fix justify-content-sm-center">
                            <div class="col-md-10 col-xl-8">
                                <h2>About Us</h2>
                                <p>We are two travelers who love the unexpected and discovering the hidden places during travels. We are both living in Greenland and has experienced the struggles of planning travels to Greenland for our own family and friends. Moreover, we have often meet fellow travelers, who gave up planning their own Greenlandic adventure, but had to go with large travel agency. Hence, we decided to establish Travels to Greenland and make travels to Greenland easy for you.</p>
                                <p>We look forward to welcome you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section novi-bg novi-bg-img section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>Our vision is to make travels to Greenland as easy as it possibly can be. Greenland seems remote and completely out of reach, when you begin the initial research, but in fact Greenland is just a 4-hour flight from Copenhagen Airport in Denmark.</p>
                    <p>
                        Based upon our local knowledge and connectivity to local operators from south to north and east to west we will make travels to Greenland easy for you, while you at the same time support and contribute to the development of our local tour operators.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p>Every day we strive to provide you with the best opportunities and suggestions for travelling to Greenland. We know the excitement of visiting new countries and remote areas and we will do our best to make sure, that your upcoming travel(s) to Greenland will not disappoint you.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
