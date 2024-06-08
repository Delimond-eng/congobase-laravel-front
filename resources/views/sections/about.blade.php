@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="about-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-md-6 xs-padding">
                <div class="about-image">
                    <img src="{{ asset('assets/img/logos/logo_1.png') }}" alt="about image">
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="about-content">
                    <h2>{{ $translateService->translate('A propos de la', app()->getLocale()) }} <a href="#">{{ $translateService->translate('Fondation Congo base(FBC)', app()->getLocale()) }}</a></h2>
                    <p>
                        {{ $translateService->translate('La FCB est une association sans but lucratif créée le 18 octobre 2023 à Kinshasa, en République Démocratique du Congo. Son siège est situé à Kinshasa, mais elle établit des antennes partout sur le territoire national et à l\'étranger.', app()->getLocale()) }}
                    </p>
                    <p>
                        {{ $translateService->translate('Sa mission est de soutenir et de promouvoir le bien-être collectif de la population congolaise, en créant des initiatives et projets d\'autonomisation et d\'épanouissement.', app()->getLocale()) }}
                        @yield("more")
                        @if(!request()->is('about'))
                            <a href="#">{{ $translateService->translate('Voir plus de détails', app()->getLocale()) }}</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

