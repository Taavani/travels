<section class="section novi-bg novi-bg-img breadcrumbs-custom">
    <div class="container">
        <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title">{{ $title }}</p>
            @if(0 < count($breadcrumbs))
                <ul class="breadcrumbs-custom__path">
                    @foreach($breadcrumbs as $breadcrumb)
                        @if($loop->last)
                            <li class="active">{{ $breadcrumb['name'] }}</li>
                        @else
                            <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a></li>
                        @endif
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</section>