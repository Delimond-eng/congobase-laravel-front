@inject('translateService', 'App\Services\GoogleTranslateService')
@extends("layouts.app")

@section('content')

    <div class="pager-header">
    <div class="container">
        <div class="page-content">
            <h2>{{ $translateService->translate("Gallérie de nos actions et évènements", app()->getLocale()) }}</h2>
            <p>{{ $translateService->translate("Explorez toutes nos actions et évènements.", app()->getLocale()) }} <br>{{ $translateService->translate("Aidez aujourd'hui, car demain, vous pourriez être celui qui a besoin d'aide !", app()->getLocale()) }}</p>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ $translateService->translate("Accueil", app()->getLocale()) }}</a></li>
                <li class="breadcrumb-item active">{{ $translateService->translate("Gallérie", app()->getLocale()) }}</li>
            </ol>
        </div>
    </div>
</div>


    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
             <div class="row">
                <ul class="gallery-filter align-center mb-30">
                    <li class="active" data-filter="*">{{ $translateService->translate("Tous", app()->getLocale()) }}</li>
                    <li data-filter=".branding">{{ $translateService->translate("Actions", app()->getLocale()) }}</li>
                    <li data-filter=".design">{{ $translateService->translate("Evènements", app()->getLocale()) }}</li>
                    <li data-filter=".wordpress">{{ $translateService->translate("Constructions", app()->getLocale()) }}</li>
                    <li data-filter=".marketing">{{ $translateService->translate("Reunions", app()->getLocale()) }}</li>
                </ul>
                <!-- /.gallery filter -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-4 col-sm-6 single-item branding design">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-1.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-1.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-1 -->
                <div class="col-lg-4 col-sm-6 single-item marketing wordpress">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-2.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-2 -->
                <div class="col-lg-4 col-sm-6 single-item wordpress design branding">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-3.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-3.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-3 -->
                <div class="col-lg-4 col-sm-6 single-item design branding wordpress">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-4.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-4.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-4 -->
                <div class="col-lg-4 col-sm-6 single-item branding marketing">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-5.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-5.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-5 -->
                <div class="col-lg-4 col-sm-6 single-item marketing design">
                    <div class="gallery-wrap">
                        <img src="{{ asset('assets/img/gallery-6.jpg') }}" alt="gallery">
                        <div class="hover">
                            <a class="img-popup" data-gall="galleryimg" href="{{ asset('assets/img/gallery-6.jpg') }}"><i class="ti-image"></i></a>
                        </div>
                    </div>
                </div><!-- /Item-6 -->
            </div>
        </div>
    </section>
    <!-- /Gallery Section -->

@endsection
