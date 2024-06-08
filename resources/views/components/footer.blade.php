@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <img src="{{ asset('assets/img/logos/logo_2.png') }}" height="80" alt="logo">
                    <p>{{ $translateService->translate("La Fondation Congo Base est une association sans but lucratif créée le 18 octobre 2023 à Kinshasa, en République Démocratique du Congo.", app()->getLocale()) }}</p>
                    <p>{{ $translateService->translate("La mission de la Fondation est de soutenir et de promouvoir le bien-être collectif de la population de la République Démocratique du Congo, en créant un cadre d'initiatives et projets d'auto-prise en charge susceptibles de promouvoir son épanouissement et à devenir responsable.", app()->getLocale()) }}</p>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>{{ $translateService->translate("Nos récentes campagnes", app()->getLocale()) }}</h3>
                    <ul class="widget-link">
                        <li><a href="#">{{ $translateService->translate("Formation et sensibilisation des jeunes chômeurs à Ilebo, province du Kasaï central", app()->getLocale()) }}  <span>-(10 juin 2022)</span></a></li>
                        <li><a href="#">{{ $translateService->translate("Aide et remise en état des salles de classe à Mueka, province du Kasaï central", app()->getLocale()) }}  <span>-(2 mai 2023)</span></a></li>
                        <li><a href="#">{{ $translateService->translate("Installation de systèmes d'eau potable pour les populations rurales défavorisées, Village Beya bwanga Kasaï central", app()->getLocale()) }}<span>-(4, mars 2023)</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 xs-padding">
                <div class="widget-content">
                    <h3>{{ $translateService->translate("Contact et adresses", app()->getLocale()) }}</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> Info@congobase.org</li>
                        <li><i class="ti-mobile"></i> +(243) 893 41 13 66</li>
                        <li><i class="ti-location-pin"></i> {{ $translateService->translate("Siège: 25Bis, Avenue Lubua, Quartier 17 Mai, C/Kimbanseke Kinshasa", app()->getLocale()) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; {{ $translateService->translate("Produit par DG.Tech RDC", app()->getLocale()) }}</div>
            </div>
            <div class="col-md-6 sm-padding">
                <ul class="footer-social">
                    <li><a href="#">{{ $translateService->translate("Status de la fondation", app()->getLocale()) }}</a></li>
                    <li><a href="#">{{ $translateService->translate("Termes et conditions d'utilisation", app()->getLocale()) }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

