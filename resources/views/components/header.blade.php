 <header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="#"><i class="ti-email"></i>Info@congobase.org</a></li>
                        <li><a href="#"><i class="ti-mobile"></i>+(243) 8194 39 94</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 d-none d-md-block">
                    <ul class="right-info">
                        <div class="language-select">
                            <form action="{{ route('setLanguage') }}" method="POST" id="languageForm">
                                @csrf
                                <select name="lang" id="langSelect">
                                    <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>Français</option>
                                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
                                </select>
                            </form>
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
                        <a href="/"><img src="assets/img/logos/logo_1.png" height="60" alt="Brand"></a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li class="active"> <a href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Nos actions</a></li>
                        <li><a href="#">Evénements</a></li>
                        <li><a href="#">Galleries</a></li>
                        <li> <a href="#">Contacts</a></li>
                    </ul>
                    <a href="{{ url("/subscription") }}" class="default-btn" style="line-height: 30px !important; font-size: 12px; padding: 0 10px;">Devenir un membre</a>
                </div>
            </div>
        </div>
    </div>
</header>

@section("scripts")
    <script src="{{ asset('assets/js/translate.js') }}"></script>
@endsection
