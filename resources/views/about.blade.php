@inject('translateService', 'App\Services\GoogleTranslateService')
@extends("layouts.app")

@section('content')
   <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{  $translateService->translate('A propos de FBC',  app()->getLocale()) }}</h2>
                <p>{{  $translateService->translate("Tout ce qu'il faut savoir à propos de la.",  app()->getLocale()) }} <br> {{  $translateService->translate('Fondation Congo Base',app()->getLocale()) }}</p>
                <ol class="breadcrumb" >
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{  $translateService->translate('Home',  app()->getLocale()) }}</a></li>
                    <li class="breadcrumb-item active">{{  $translateService->translate('A propos',  app()->getLocale()) }}</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- /Page Header -->

     @section("more")
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam voluptatibus ad sed praesentium rem dolores et eius at voluptatum, vero quam adipisci, inventore facilis doloribus repudiandae nulla perspiciatis aspernatur temporibus?</p>
    @endsection
    @include('sections.about')

    @include('sections.faq')

    @include('sections.counter')
@endsection
