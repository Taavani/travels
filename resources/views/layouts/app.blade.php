<div class="page">

    @include('partials.header')

    <main id="main" class="py-8 prose main">
        @yield('content')
    </main>

    @hasSection('sidebar')
        <aside class="sidebar">
            @yield('sidebar')
        </aside>
    @endif

    @include('partials.footer')
</div>
