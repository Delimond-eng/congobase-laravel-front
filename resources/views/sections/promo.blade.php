 @inject('translateService', 'App\Services\GoogleTranslateService')
<section class="promo-section bd-bottom">
    <div class="promo-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="assets/img/donate.png" alt="prmo icon">
                        <h3>{{ $translateService->translate("Faites un don !", app()->getLocale()) }}</h3>
                        <p>{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale()) }}</p>
                        <a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="assets/img/money.png" height="64" alt="prmo icon">
                        <h3>{{ $translateService->translate("Collecte de fonds", app()->getLocale()) }}</h3>
                        <p>{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale()) }}</p>
                        <a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="assets/img/member.png" height="64" alt="prmo icon">
                        <h3>{{ $translateService->translate("Devenez un membre", app()->getLocale()) }}</h3>
                        <p>{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale()) }}</p>
                        <a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

