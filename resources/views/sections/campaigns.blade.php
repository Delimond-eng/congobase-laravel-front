@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="campaigns-section bd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 xs-padding">
                <div class="campaigns-wrap">
                    <h4>{{ $translateService->translate('Projet en vedette', app()->getLocale()) }}</h4>
                    <h2>{{ $translateService->translate('Construction d\'une école.', app()->getLocale()) }}</h2>
                    <p>{{ $translateService->translate('Ce projet phare vise à construire une école moderne pour offrir une éducation de qualité aux enfants d\'une communauté rurale défavorisée. La nouvelle infrastructure comprendra plusieurs salles de classe, une bibliothèque, un laboratoire informatique et des installations sanitaires adéquates. En collaboration avec des partenaires locaux et internationaux, ce projet aspire à créer un environnement éducatif sûr et stimulant, favorisant ainsi le développement académique et personnel des élèves. La construction de cette école représente un investissement crucial dans l\'avenir de la communauté, ouvrant des portes vers de nouvelles opportunités pour les générations futures.', app()->getLocale()) }}</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><span class="wow cssanimation fadeInLeft">{{ $translateService->translate('5%', app()->getLocale()) }}</span></div>
                    </div>
                    <div class="donation-box">
                        <h3><i class="ti-bar-chart"></i>{{ $translateService->translate('Objectif:', app()->getLocale()) }} $450000</h3>
                        <h3><i class="ti-thumb-up"></i>{{ $translateService->translate('Fonds Levés:', app()->getLocale()) }} $5000</h3>
                    </div>
                    <a href="#" class="default-btn">{{ $translateService->translate('Faites un don maintenant', app()->getLocale()) }}</a>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="video-wrap">
                    <img src="{{ asset('assets/img/home-blog-1.jpg') }}" alt="video">
                    <div class="play">
                        <a class="assets/img-popup" data-autoplay="true" data-vbtype="video" href="{{ url('https://www.youtube.com/watch?v=_IlLwfC2dNc') }}"><i class="ti-control-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

