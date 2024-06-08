@inject('translateService', 'App\Services\GoogleTranslateService')
 <header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-9 col-9">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i>Info@congobase.org</a></li>
                        <li><a href="#"><i class="ti-mobile"></i>+(243) 8194 39 94</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-3 d-md-block">
                    <ul class="right-info">
                        <div class="language-select">
                            <select name="lang" id="langSelect">
                                <option value="{{ LaravelLocalization::getLocalizedURL('fr') }}" {{ session('locale') == 'fr' ? 'selected' : '' }}>Français</option>
                                <option value="{{ LaravelLocalization::getLocalizedURL('en') }}" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
                            </select>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logos/logo_1.png') }}" height="60" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"> <a href="{{ url('/') }}"> {{ $translateService->translate('Accueil', app()->getLocale()) }}</a>
                        </li>
                        <li><a href="{{ url('/about') }}">{{ $translateService->translate('A propos', app()->getLocale()) }}</a></li>
                        <li><a href="{{ url('/actions') }}"> {{ $translateService->translate('Actions', app()->getLocale()) }} </a></li>
                        <li><a href="{{ url('/events') }}"> {{ $translateService->translate('Evénements', app()->getLocale()) }} </a></li>
                        <li><a href="{{ url('/gallery') }}"> {{ $translateService->translate('Galleries', app()->getLocale()) }}</a></li>
                        <li> <a href="{{ url('/contact') }}">  {{ $translateService->translate('Contacts', app()->getLocale()) }} </a></li>
                    </ul>
                    @if(!request()->is('subscription'))
                        <a href="{{ url("/subscription") }}" class="default-btn" style="line-height: 30px !important; font-size: 12px; padding: 0 10px;">{{ $translateService->translate('Devenir un membre', app()->getLocale()) }} </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>

@section("scripts")
    <script src="{{ asset('assets/js/translate.js') }}"></script>
@endsection
