@extends('layouts.app-travel')

@section('content')
    @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-front-page', 'partials.content'])
    @endwhile
@endsection

