 @inject('translateService', 'App\Services\GoogleTranslateService')
 <section class="slider-section">
        <div class="slider-wrapper">
            <div id="main-slider" class="nivoSlider">
                <img src="assets/img/slider-1.jpg" alt="" title="#slider-caption-1" />
                <img src="assets/img/slider-2.jpg" alt="" title="#slider-caption-2" />
                <img src="assets/img/slider-3.jpg" alt="" title="#slider-caption-3" />
            </div>

            <!-- /#main-slider -->
            <div id="slider-caption-1" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">{{ $translateService->translate("Rejoignez-nous aujourd'hui", app()->getLocale())}}</h5>
                                <h1 class="wow cssanimation leFadeInRight sequence">{{ $translateService->translate('Donnez un peu. Changez beaucoup', app()->getLocale())}}</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale())}}<br>{{ $translateService->translate("Oubliez ce que vous pouvez obtenir et voyez ce que vous pouvez donner.", app()->getLocale())}}</p>
                                <a href="{{ url('/subscription') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Devenez un membre", app()->getLocale())}}</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Faites un don maintenant", app()->getLocale())}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /#slider-caption-2 -->
            <div id="slider-caption-2" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h1 class="wow cssanimation fadeInTop" data-wow-delay="1s" data-wow-duration="800ms">{{ $translateService->translate('Ensemble, nous pouvons faire la différence', app()->getLocale())}}</h1>
                                <p class="wow cssanimation fadeInBottom" data-wow-delay="1s">{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale())}}<br>{{ $translateService->translate("Oubliez ce que vous pouvez obtenir et voyez ce que vous pouvez donner.", app()->getLocale())}}</p>
                                <a href="{{ url('/subscription') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Devenez un membre", app()->getLocale())}}</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Faites un don maintenant", app()->getLocale())}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /#slider-caption-3 -->
            <div id="slider-caption-3" class="nivo-html-caption slider-caption">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="slider-text">
                                <h5 class="wow cssanimation fadeInBottom">{{ $translateService->translate("Rejoignez-nous dès aujourd'hui", app()->getLocale())}}</h5>
                                <h1 class="wow cssanimation lePushReleaseFrom sequence" data-wow-delay="1s">{{ $translateService->translate("Donnez une meilleure vie pour les gens!", app()->getLocale())}}</h1>
                                <p class="wow cssanimation fadeInTop" data-wow-delay="1s">{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale())}}<br>{{ $translateService->translate("Oubliez ce que vous pouvez obtenir et voyez ce que vous pouvez donner.", app()->getLocale())}}</p>
                                <a href="{{ url('/subscription') }}" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Devenez un membre", app()->getLocale())}}</a>
                                <a href="#" class="default-btn wow cssanimation fadeInBottom" data-wow-delay="0.8s">{{ $translateService->translate("Faites un don maintenant", app()->getLocale())}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
