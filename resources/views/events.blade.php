@inject('translateService', 'App\Services\GoogleTranslateService')
@extends("layouts.app")
@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{ $translateService->translate("Nos évènements", app()->getLocale()) }}</h2>
                <p>{{ $translateService->translate("Help today because tomorrow you may be the one who needs more helping!", app()->getLocale()) }}</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ $translateService->translate("Accueil", app()->getLocale()) }}</a></li>
                    <li class="breadcrumb-item active">{{ $translateService->translate("Evènements", app()->getLocale()) }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="blog-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xs-padding">
                    <div class="blog-items grid-list row">
                        @for($i = 0; $i < 6; $i++)
                            <div class="col-md-4 padding-15">
                                <div class="blog-post">
                                    <img src="assets/img/home-blog-1.jpg" alt="blog post">
                                    <div class="blog-content">
                                        <span class="date"><i class="fa fa-clock-o"></i> {{ $translateService->translate("January 01.2021", app()->getLocale()) }}</span>
                                        <h3><a href="#">{{ $translateService->translate("The History of Donation Told", app()->getLocale()) }}</a></h3>
                                        <p>{{ $translateService->translate("The secret to happiness lies in helping others. Never underestimate the difference YOU can make in the lives of the poor, the abused and the helpless.", app()->getLocale()) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        <!-- Post 1 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section -->

    <section class="cta-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta-content">
                        <h2>{{ $translateService->translate("Ready to Join With Us?", app()->getLocale()) }}</h2>
                        <p>{{ $translateService->translate("The secret to happiness lies in helping others. Never underestimate the difference the abused and the helpless.", app()->getLocale()) }}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center text-right">
                    <a href="#" class="default-btn">{{ $translateService->translate("Contact With Us", app()->getLocale()) }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section -->
@endsection
