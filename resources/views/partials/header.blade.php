<header class="page-header">
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar novi-bg novi-bg-img"
             data-layout="rd-navbar-fixed"
             data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed"
             data-lg-layout="rd-navbar-fixed"
             data-xl-layout="rd-navbar-static"
             data-xxl-layout="rd-navbar-static"
             data-sm-device-layout="rd-navbar-fixed"
             data-md-device-layout="rd-navbar-fixed"
             data-lg-device-layout="rd-navbar-fixed"
             data-xl-device-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static"
             data-stick-up-clone="false"
             data-sm-stick-up="true"
             data-md-stick-up="true"
             data-lg-stick-up="true"
             data-xl-stick-up="true"
             data-xxl-stick-up="true"
             data-lg-stick-up-offset="69px"
             data-xl-stick-up-offset="1px"
             data-xxl-stick-up-offset="1px">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-panel">
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                        <span></span>
                    </button>
                    <div class="rd-navbar-brand">
                        <a class="brand" href="{{ $siteUrl }}">
                            @if ($siteIcon)
                                <img class="brand-logo-light" src="{{ $siteIcon }}" alt="" width="512"
                                     height="32" />
                            @endif

                            {{ $siteName }}
                        </a>
                        {{ $siteDescription }}
                    </div>
                </div>

                <div class="rd-navbar-nav-wrap">
                    @if (has_nav_menu('primary_navigation'))
                      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'rd-navbar-nav', 'echo' => false]) !!}
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>

