@inject('translateService', 'App\Services\GoogleTranslateService')
@extends('layouts.app')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{ $translateService->translate("Devenez membre de la FBC", app()->getLocale()) }} </h2>

                <p>{{ $translateService->translate("En devenant membre de la FBC, vous rejoignez une communauté engagée qui œuvre pour un changement positif en République Démocratique du Congo. Ensemble, nous pouvons faire une différence significative en soutenant nos initiatives humanitaires
                    et en impactant des vies à travers le monde.", app()->getLocale())  }} <br>{{ $translateService->translate("Rejoignez-nous aujourd'hui et devenez un acteur du changement!", app()->getLocale()) }}</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{ $translateService->translate("Home", app()->getLocale()) }}</a></li>
                    <li class="breadcrumb-item active">{{ $translateService->translate("Souscription ", app()->getLocale()) }}</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="contact-section padding">
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-12">
                    <div class="contact-form">
                        <h3>{{ $translateService->translate("Formulaire de souscription", app()->getLocale()) }} </h3>
                        <p>{{ $translateService->translate("Veuillez renseigner tous les champs requis pour souscrire !", app()->getLocale()) }}</p>
                        <form action="{{ route('subscribe') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @if (session('success'))
                                <div class="alert alert-dismissible alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{  $translateService->translate(session('success'), app()->getLocale())  }}
                                </div>
                            @endif
                             @if (session('errors'))
                                <div class="alert alert-dismissible alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ $translateService->translate(session('errors'), app()->getLocale()) }}
                                </div>
                            @endif
                            <div class="row gutters">
                                <div class="col-md-3 col-6">
                                    <h4 class="text-center"> {{ $translateService->translate("Photo(optionnelle)", app()->getLocale()) }} </h4>
                                    <video id="video-preview" class="d-none img-fluid w-100" autoplay></video>
                                    <img src="{{ asset('assets/img/cam-placeholder.jpg') }}" id="photo-preview" alt="photo" class="img-fluid w-100 position-relative">
                                    <input type="file" name="photo" id="photo-input" style="visibility: hidden">
                                    <button class="btn btn-dark btn-lg btn-capture" id="btn-capture" type="button"> <i class="ti-camera"></i> </button>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" id="nom" name="nom" class="form-control" placeholder="{{ $translateService->translate("Nom", app()->getLocale()) }}" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="postnom" name="postnom" class="form-control" placeholder="{{ $translateService->translate("PostNom", app()->getLocale()) }}" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="{{ $translateService->translate("Prénom", app()->getLocale()) }}" required>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <select name="etatcivil" class="form-control" id="etatcivil">
                                                <option selected hidden>{{ $translateService->translate("Etat civil", app()->getLocale()) }}</option>
                                                <option value="Célibataire">{{ $translateService->translate("Célibataire", app()->getLocale()) }}</option>
                                                <option value="Marié">{{ $translateService->translate("Marié", app()->getLocale()) }} </option>
                                                <option value="Divorcé">{{ $translateService->translate("Divorcé", app()->getLocale()) }}</option>
                                                <option value="Veuf"> {{ $translateService->translate("Veuf", app()->getLocale()) }}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3 col-6">
                                            <select name="genre" class="form-control" id="genre">
                                                <option selected hidden> {{ $translateService->translate("Genre", app()->getLocale()) }}</option>
                                                <option value="Homme">{{ $translateService->translate("Masculin", app()->getLocale()) }}</option>
                                                <option value="Femme">{{ $translateService->translate("Féminin", app()->getLocale()) }}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="tel" name="telephone" placeholder="{{ $translateService->translate("Téléphone", app()->getLocale()) }}" class="form-control" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" placeholder="{{ $translateService->translate("Email(optionnel)", app()->getLocale()) }}" class="form-control" required>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea name="adresse" id="adresse" placeholder="{{ $translateService->translate("Adresse", app()->getLocale()) }}" class="form-control"></textarea>
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="ville" name="ville" placeholder="{{ $translateService->translate("Ville", app()->getLocale()) }}" required>
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nationalite" name="nationalite" placeholder="{{ $translateService->translate("Nationalité ex:Congolaise", app()->getLocale()) }} " required>
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea name="description" id="description" placeholder="{{ $translateService->translate("Décrivez-vous en quelques mots !", app()->getLocale()) }}" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-12 d-flex justify-content-end align-items-end w-100">
                                    <button id="submit" class="default-btn" type="submit">{{ $translateService->translate("Soumettre pour souscrire !", app()->getLocale()) }} </button>
                                </div>
                            </div>
                            {{--  <div class="alert" role="alert">Success</div>  --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("styles")
    <link rel="stylesheet" href="{{ asset('assets/css/costum.css') }}">
@endsection

@section("scripts")

    <script src={{ asset('assets/js/app.js') }}></script>
@endsection
