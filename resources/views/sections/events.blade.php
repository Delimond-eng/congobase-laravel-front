@inject('translateService', 'App\Services\GoogleTranslateService')
<section class="events-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h2>{{ $translateService->translate("Événements à venir", app()->getLocale()) }}</h2>
            <span class="heading-border"></span>
            <p>{{ $translateService->translate("Rejoignez-nous lors de nos prochains événements et contribuez à faire une différence. Votre participation aide à soutenir nos initiatives et à apporter des changements positifs dans les communautés que nous servons !", app()->getLocale()) }}</p>
        </div>
        <!-- /Section Heading -->
        <div id="event-carousel2" class="events-wrap owl-Carousel">
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-1.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate("Journée de sensibilisation à la santé communautaire !", app()->getLocale()) }}</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>12/Juin 2024 14:00 PM.</p>
                        <p><i class="ti-location-pin"></i>Masina Siforco, Kinshasa.</p>
                    </div>
                    <p>{{ $translateService->translate("Offrant des consultations médicales gratuites, des dépistages de santé...", app()->getLocale()) }}<br><a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a></p>

                </div>
            </div>
            <!-- Event-1 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-2.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate("Marche solidaire pour l'éducation", app()->getLocale()) }}</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>20 Aout 2024 12:00 PM..</p>
                        <p><i class="ti-location-pin"></i>Ilebo Kasaï central</p>
                    </div>
                    <p>{{ $translateService->translate("une marche solidaire pour collecter des fonds en faveur de l'éducation des enfants défavorisés...", app()->getLocale()) }} <a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a></p>

                </div>
            </div>
            <!-- Event-2 -->
            <div class="events-item">
                <div class="event-thumb">
                    <img src="{{ asset('assets/img/events-3.jpg') }}" alt="events">
                </div>
                <div class="event-details">
                    <h3>{{ $translateService->translate("Atelier de formation pour les bénévoles", app()->getLocale()) }}</h3>
                    <div class="event-info">
                        <p><i class="ti-calendar"></i>De 10 Sept à 20 Sept 2024.</p>
                        <p><i class="ti-location-pin"></i>Kinshasa Bumbu.</p>
                    </div>
                    <p>{{ $translateService->translate("L'atelier inclut des sessions sur les compétences en leadership, la sensibilisation culturelle et les techniques de communication...", app()->getLocale()) }} <a href="#">{{ $translateService->translate("En savoir plus", app()->getLocale()) }}</a></p>
                </div>
            </div>
            <!-- Event-3 -->
        </div>
    </div>
</section>

