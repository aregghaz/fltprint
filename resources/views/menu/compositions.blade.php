@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Composition</h3>
            <div class="col-md-9">
                <p>Néanmoins, nous pouvons vous proposer un service de composition pour vos flyers, affiches et cartes de visite. Les prix que nous proposons ci-dessous sont donnés à titre indicatifs. Ils peuvent varier suivant la complexité et le nombre d'épreuves qui seront nécessaires à la réalisation finale.</p>
            </div>

        </div>
        <div class="col-md-6">
            <h6>Carte de visite : 40 euros h.tva</h6>
            <div class="col-md-9">
                <ul class="list_composition">
                    <li>
                        A6 : 70 euros h.tva
                    </li>
                    <li>
                        US : 100 euros h.tva
                    </li>
                    <li>
                        A5 : 120 euros h.tva
                    </li>
                    <li>
                        A4 : 200 euros h.tva
                    </li>
                </ul>
                <h6>Affiche : 100 euros h.tva</h6>
                <p>Un prix dégressif est appliqué lors de commandes groupées de plusieurs produits.</p>
                <br>
                <br>
                <p>Merci d'envoyer directement vos documents à notre graphiste par l'adresse : <a >linkinfo@flyprint.be</a> en n'oubliant pas de préciser :</p>
                <ul class="list_composition">
                    <li>
                        - ce que vous souhaitez (format et quantités),
                    </li>
                    <li>
                        - ce à quoi vous souhaitez que la composition ressemble;
                    </li>
                    <li>
                        - vos coordonnées complètes pour vous contacter, vous livrer et vous facturer;
                    </li>
                    <li>
                        - le délai dont vous disposez afin de vous conseiller au mieux pour votre projet.
                    </li>
                </ul>
                <br>
                <p>N'oubliez pas de joindre vos logos, photos et textes en la meilleure qualité possible.</p>
                <br>
                <p>Merci de bien relire vos textes avant de les envoyer.</p>
            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection