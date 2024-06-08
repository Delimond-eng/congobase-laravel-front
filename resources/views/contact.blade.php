@inject('translateService', 'App\Services\GoogleTranslateService')
@extends("layouts.app")

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>{{  $translateService->translate('Contactez-nous',  app()->getLocale()) }}</h2>
                <p>{{  $translateService->translate("Aidez aujourd'hui car demain, vous pourriez être celui qui a le plus besoin d'aide !",  app()->getLocale()) }}</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{  $translateService->translate('Home',  app()->getLocale()) }}</a></li>
                    <li class="breadcrumb-item active">{{  $translateService->translate('Contact',  app()->getLocale()) }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <section class="contact-section padding">
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="contact-info">
                        <h3>{{  $translateService->translate('ENTREZ EN CONTACT',  app()->getLocale()) }}</h3>
                        <p>{{  $translateService->translate("Le secret du bonheur réside dans le fait d'aider les autres. Ne sous-estimez jamais l'impact que VOUS pouvez avoir dans la vie des pauvres, des maltraités et des démunis.",  app()->getLocale()) }}</p>
                        <p>{{  $translateService->translate("Le secret du bonheur réside dans le fait d'aider les autres. Ne sous-estimez jamais l'impact.",  app()->getLocale()) }}</p>
                        <ul>
                            <li><i class="ti-location-pin"></i> {{  $translateService->translate('Siège: 25Bis, Avenue Lubua, Quartier 17 Mai, C/Kimbanseke Kinshasa',  app()->getLocale()) }}</li>
                            <li><i class="ti-mobile"></i>  +(243) 893 41 13 66</li>
                            <li><i class="ti-email"></i>Info@congobase.org</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="contact-form">
                        <h3>{{  $translateService->translate('Laissez-nous un message',  app()->getLocale()) }}</h3>
                        <p>{{  $translateService->translate('Notre équipe vous contactera bientôt pour plus de détails.',  app()->getLocale()) }}</p>
                        <form method="post" class="form-horizontal">
                            <div class="form-group colum-row row">
                                <div class="col-sm-6">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="{{  $translateService->translate('Votre nom complet',  app()->getLocale()) }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="{{  $translateService->translate('Adresse email',  app()->getLocale()) }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="{{  $translateService->translate('Message',  app()->getLocale()) }}" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">{{  $translateService->translate('Envoyez votre message',  app()->getLocale()) }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

@endsection
