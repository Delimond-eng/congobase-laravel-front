@inject('translateService', 'App\Services\GoogleTranslateService')
<section id="counter" class="counter-section">
    <div class="container">
        <ul class="row counters">
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-money"></i>
                    <h3 class="counter">5389</h3>
                    <h4 class="text-white">{{ $translateService->translate("Dons reçus", app()->getLocale()) }}</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-face-smile"></i>
                    <h3 class="counter">10693</h3>
                    <h4 class="text-white">{{ $translateService->translate("Membres inscrits", app()->getLocale()) }}</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-user"></i>
                    <h3 class="counter">50177</h3>
                    <h4 class="text-white">{{ $translateService->translate("Personnes Impactées", app()->getLocale()) }}</h4>
                </div>
            </li>
            <li class="col-md-3 col-sm-6 sm-padding">
                <div class="counter-content">
                    <i class="ti-comments"></i>
                    <h3 class="counter">669</h3>
                    <h4 class="text-white">{{ $translateService->translate("Commentaires positifs", app()->getLocale()) }}</h4>
                </div>
            </li>
        </ul>
    </div>
</section>

