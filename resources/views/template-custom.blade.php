{{--
  Template Name: Frontpage template
--}}

@extends('layouts.app')

@section('content')
    <div class="page">
        @while(have_posts()) @php(the_post())
        @include('partials.content-page')
        @endwhile
    </div>
@endsection
