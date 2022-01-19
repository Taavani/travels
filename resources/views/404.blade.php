@extends('layouts.app-travel')

@section('content')
  @include('partials.page-sub')

  @if (! have_posts())
    <section class="section parallax-container text-center parallax-header context-dark" data-parallax-img="images/parallax-09.jpg">
      <div class="parallax-content">
        <div class="parallax-header__inner">
          <div class="parallax-header__content">
            <div class="container">
              <div class="row row-fix justify-content-sm-center">
                <div class="col-md-10 col-xl-8">
                  <h2>Page Not Found</h2>
                  <p>The page requested couldn't be found - this could be due to a spelling error in the URL or a removed page.</p><a class="button button-black" href="{{ $siteUrl }}">Go back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @include('partials.footer')
@endsection
