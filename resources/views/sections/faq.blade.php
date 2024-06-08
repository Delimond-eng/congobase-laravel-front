@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="team-section bg-grey bd-bottom circle shape padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>{{ $translateService->translate("Comment et pourquoi devenir un membre ?", app()->getLocale()) }}</h2>
            <span class="heading-border"></span>
            <p>{{ $translateService->translate("Rejoignez notre communauté et faites partie du changement ! En devenant membre de notre Fondation, vous contribuez directement à nos initiatives visant à améliorer des vies et à bâtir un avenir meilleur. Voici pourquoi et comment vous pouvez nous rejoindre!", app()->getLocale()) }}</p>
        </div>
        <!-- /Section Heading -->
        <div class="team-wrapper row">
            <div class="col-lg-6 sm-padding">
                <img src="{{ asset('assets/img/logos/membership-2.jpg') }}" alt="membership" class="img-fluid" style="width: 100%; border-radius: 5px;">
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="team-content">
                    <h2>{{ $translateService->translate("Pourquoi devenir membre ?", app()->getLocale()) }}</h2>
                    <ul class="check-list">
                        <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Impact direct :", app()->getLocale()) }}</strong> {{ $translateService->translate("En tant que membre, vous participez activement à nos projets et voyez concrètement l'impact de votre soutien.", app()->getLocale()) }}</li>
                        <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Communauté engagée :", app()->getLocale()) }}</strong> {{ $translateService->translate("Faites partie d'un réseau de personnes partageant les mêmes valeurs et désireuses de faire une différence.", app()->getLocale()) }}</li>
                        <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Accès exclusif :", app()->getLocale()) }}</strong> {{ $translateService->translate("Recevez des mises à jour régulières sur nos projets, invitations à des événements spéciaux et des rapports détaillés sur l'impact de nos actions.", app()->getLocale()) }}</li>
                        <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Développement personnel :", app()->getLocale()) }}</strong> {{ $translateService->translate("Bénéficiez d'opportunités de formation, de bénévolat et de développement de compétences dans divers domaines.", app()->getLocale()) }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <h2 style="margin-top: 25px !important;">{{ $translateService->translate("Comment devenir membre ?", app()->getLocale()) }}</h2>
                <ul class="check-list">
                    <li><i class="fa fa-check"></i><strong><a href="#">{{ $translateService->translate("Inscription en ligne :", app()->getLocale()) }}</a></strong> {{ $translateService->translate("Remplissez notre formulaire d'adhésion sur notre site web. C'est rapide et facile !", app()->getLocale()) }}</li>
                    <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Choisissez votre niveau de soutien :", app()->getLocale()) }}</strong> {{ $translateService->translate("Sélectionnez parmi plusieurs options d'adhésion, adaptées à votre capacité et à votre engagement.", app()->getLocale()) }}</li>
                    <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Participez activement :", app()->getLocale()) }}</strong> {{ $translateService->translate("Une fois inscrit, commencez à participer à nos événements, projets et initiatives. Chaque contribution compte !", app()->getLocale()) }}</li>
                    <li><i class="fa fa-check"></i><strong>{{ $translateService->translate("Restez informé :", app()->getLocale()) }}</strong> {{ $translateService->translate("Recevez notre newsletter mensuelle avec des nouvelles, des témoignages et des opportunités de bénévolat.", app()->getLocale()) }}</li>
                </ul>
                <p><strong>{{ $translateService->translate("Nous avons besoin de vous !", app()->getLocale()) }}</strong> {{ $translateService->translate("Votre adhésion nous permet de continuer notre mission et d'étendre notre impact. Ensemble, nous pouvons faire une réelle différence dans la vie de ceux qui en ont le plus besoin.", app()->getLocale()) }}</p>
                <a href="{{ url("/subscription")  }}" class="default-btn">{{ $translateService->translate("Inscrivez-vous dès maintenant", app()->getLocale()) }}</a>
            </div>
        </div>
    </div>
</section>

