@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Contacts</h3>
            <div class="col-md-9">
                <h4>Informations en français</h4>
                <p>Pour les demandes d'information et informations pour la production : <a>info@flyprint.be</a> ou +32
                    (0) 475 46 89 18</p>
                <p>Pour la comptabilité et facturation :<a>compta@flyprint.be</a>et au +32 (19) 33 87 84, Evelyne</p>
                <h4>Inlichtingen in het Nederlands </h4>
                <p>De inlichtingen zijn nu ook in het Nederlands beschikbaar op het nummer +32 (0)495/32.45.68
                    Binnenkort zal onze website ook in het Nederlands zijn.</p>
                <a href="{{ route('device') }}">DEVIS en LIGNE</a>
                <br>
                <br>
                <br>
                <p> Pour les demandes de compositions : <a href="">info@flyprint.be</a></p>
                <div class="col col-md-10 col-md-offset-1">
                    <ul class="list_composition">
                        <li>
                            Flyprint
                        </li>
                        <li>
                            Vreven Photogravure sprl
                        </li>
                        <li>
                            Rue de Berloz, 13
                        </li>
                        <li>
                            B-4250 Boëlhe - Belgique
                        </li>
                        <li>
                            TVA BE 0471.576.782
                        </li>
                        <li>
                            Depuis la Belgique : 019/33.87.87 - Fax 019/33.87.80
                        </li>
                        <li>
                            Depuis les autres pays : 00.32.19.33.87.87 - Fax 00.32.19.33.87.80
                        </li>
                        <li>
                            (50°41'09''N 5°10'13''E)
                        </li>
                    </ul>
                    <br>
                    <ul class="list_composition">
                        <li><strong>Notre bureau est ouvert et joignable au numéro +32 (0)19 33 87 87</strong></li>
                        <li>Du lundi au vendredi de 9h30 à 17h30</li>
                    </ul>
                    <ul class="list_composition">
                        <li><strong> Ou éventuellement sur rendez-vous au +32 (0) 475 46 89 18</strong></li>
                        <li>Du lundi au vendredi de 17h30 à 19h/li>
                        <li>Le samedi de 10h à 12h</li>
                    </ul>
                    <ul class="list_composition">
                        <li>Flyprint sprl est une division de Vreven Photogravure sprl</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <br>
                <br>
                <p>Voici nos coordonnées banquaires</p>
                <br>
                <p>BIC GEBABEBB / IBAN BE37 2400 5013 2028</p>
                <p>à l'ordre de</p>
                <p>Photogravure Vreven sprl</p>
                <p>Rue de Berloz 13</p>
                <p>4250 BOELHE (Belgique)</p>
                <p>N'oubliez pas d'envoyer votre preuve de paiement à <a href="">info@flyprint.be</a> afin qu'elle
                    puisse être prise en compte.</p>
                <p>Si vous souhaitez recevoir votre marchandise en effectuant le paiement avant l'expédition, merci de
                    suivre cette procédure :
                    <a href="">http://www.flyprint.be/static/PAIEMENT_PAR_BANQUE_FR.pdf</a></p>
                <p>Vous trouverez nos conditions de vente à l'adresse : <a href="">http://www.flyprint.be/pub/files/get/conditions_fr.pdf</a>
                </p>
                <p><a href="">Ici vous trouverez le RIB de notre compte CIC - France</a></p>
            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection