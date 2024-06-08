 @inject('translateService', 'App\Services\GoogleTranslateService')
<section class="testimonial-section bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>{{ $translateService->translate("Témoignages", app()->getLocale()) }}</h2>
            <span class="heading-border"></span>
            <p>{{ $translateService->translate("Cette section présente les expériences et les retours des bénéficiaires de nos actions et de nos supporters. Découvrez comment notre travail a fait une différence dans la vie de nombreuses personnes!", app()->getLocale()) }}</p>
        </div>
        <!-- /Section Heading -->
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            <div class="testimonial-item">
                <p>{{ $translateService->translate("Grâce à la formation reçue, j'ai pu trouver un emploi stable et améliorer la vie de ma famille. Je suis très reconnaissant pour cette opportunité.", app()->getLocale()) }}</p>
                <div class="testi-footer">
                    <img src="assets/img/logos/img-testm-1.jpg" alt="profile">
                    <h4>Kalala Tshondo <span>Marc</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>{{ $translateService->translate("Participer aux projets de la FBC m'a permis de voir l'impact direct de notre travail sur le terrain. C'est une expérience enrichissante et motivante.", app()->getLocale()) }}</p>
                <div class="testi-footer">
                    <img src="assets/img/logos/img-testm-2.jpg" alt="profile">
                    <h4>Ilunga Kanda <span>Illain</span></h4>
                </div>
            </div>
            <div class="testimonial-item">
                <p>{{ $translateService->translate("Soutenir cette Fondation est un investissement dans un avenir meilleur pour de nombreuses communautés. Je suis fier de contribuer à cette cause.", app()->getLocale()) }}</p>
                <div class="testi-footer">
                    <img src="assets/img/logos/img-testm-3.jpg" alt="profile">
                    <h4>Nsingi Matudidi <span>Georges</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>

