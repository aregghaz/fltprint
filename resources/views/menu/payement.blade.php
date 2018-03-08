@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Moyens de payement</h3>
            <div class="col-md-9">
                <p>SVous pouvez actuellement payer votre commande en ligne ou à la livraison. Les enlèvements au bureau sont payables par MisterCash et Visa.</p>
                <br>
                <p>Pour les commandes d'un montant supérieur à 500 € tvac, un paiement avant la mise en production sera demandé.</p>
            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection