@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="events-section bg-grey bd-bottom padding">
    <div class="container">
        @if(!request()->is('actions'))
        <div class="section-heading text-center mb-40">
            <h2>{{ $translateService->translate('Nos actions', app()->getLocale()) }}</h2>
            <span class="heading-border"></span>
            <p>{{ $translateService->translate('Chaque action est conçue pour répondre aux besoins spécifiques des communautés que nous servons, avec l\'objectif de créer un impact durable et positif.', app()->getLocale()) }}</p>
        </div>
        @endif
        <!-- /Section Heading -->
        <div id="event-carousel" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Education', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Construction et rénovation d\'écoles dans les zones défavorisées.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Santé', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Organisation de campagnes de sensibilisation et de dépistage pour les maladies courantes.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Eau et assainissement', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Installation de systèmes d\'eau potable, tels que des puits ou des systèmes de filtration, dans les zones rurales.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-3 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Autonomisation économique', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Formation professionnelle et développement des compétences pour les jeunes et les adultes.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-4 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Environnement', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Initiatives de reboisement pour lutter contre la déforestation et restaurer les écosystèmes locaux.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-5 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate('Aide d\'urgence', app()->getLocale()) }}</h3>
                    <p>{{ $translateService->translate('Intervention en cas de catastrophes naturelles, telles que des inondations, des sécheresses ou des tremblements de terre.', app()->getLocale()) }}<br><a href="#" class="read-more">{{ $translateService->translate('En savoir plus', app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-6 -->
        </div>
    </div>
</section>

