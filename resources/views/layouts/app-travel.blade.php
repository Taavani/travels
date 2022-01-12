<div class="page">
    <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar novi-bg novi-bg-img" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-sm-device-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="69px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <!-- Brand-->
                            <a class="brand d-flex align-items-center" href="{{ $siteUrl }}">
                                @if (isset($siteIcon))
                                    <img class="brand-logo-dark" src="{{ $siteIcon }}" alt="" width="32"
                                         height="32" />
                                @endif
                                {{ $siteName }}
                            </a>
                        </div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-nav-wrap">
                    </div>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

</div>