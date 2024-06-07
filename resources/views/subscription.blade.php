@extends('layouts.app')

@section('content')
    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>Devenez membre de la FBC</h2>
                <p>En devenant membre de la FBC, vous rejoignez une communauté engagée qui œuvre pour un changement positif en République Démocratique du Congo. Ensemble, nous pouvons faire une différence significative en soutenant nos initiatives humanitaires
                    et en impactant des vies à travers le monde. <br>Rejoignez-nous aujourd'hui et devenez un acteur du changement!</p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Souscription</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="contact-section padding">
        <div class="container">
            <div class="row contact-wrap">
                <div class="col-md-12">
                    <div class="contact-form">
                        <h3>Formulaire de souscription</h3>
                        <p>Veuillez renseigner tous les champs requis pour souscrire !</p>
                        <form action="https://html.dynamiclayers.net/dl/charitify/contact.php" method="post" id="ajax_form">
                            <div class="row gutters">
                                <div class="col-sm-4">
                                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" id="postnom" name="postnom" class="form-control" placeholder="Post nom" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prenom" required>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <select name="etatcivil" class="form-control" id="etatcivil">
                                        <option selected hidden>Etat civil</option>
                                        <option>Célibataire</option>
                                        <option>Marié(e)</option>
                                        <option>Divorce(e)</option>
                                        <option>Veuf(ve)</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-6">
                                    <select name="etatcivil" class="form-control" id="etatcivil">
                                        <option selected hidden>Sexe</option>
                                        <option>Homme</option>
                                        <option>Femme</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="tel" placeholder="Téléphone" class="form-control" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" placeholder="Email" class="form-control" required>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="adresse" id="adresse" placeholder="Adresse" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button id="submit" class="default-btn" type="submit">Soumettre pour souscrire</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
