@inject('translateService', 'App\Services\GoogleTranslateService')
@extends('layouts.app')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Nos Actions</h2>
                <p>Help today because tomorrow you may be the one who <br>needs more helping!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Actions</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    @include('sections.actions')
    <!-- /Causes Section -->

    @include('sections.campaigns')
    <!-- /Featured Campaigns Section -->
@endsection
