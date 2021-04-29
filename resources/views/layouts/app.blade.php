<div class="page">
    @include('partials.header')

    @yield('content')

    @hasSection('sidebar')
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    @endif
    @hasSection('footer')
        @yield('footer')
    @else
        @include('partials.footer')
    @endif
</div>
