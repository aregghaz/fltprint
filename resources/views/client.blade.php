@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Mes commandes en cours</h3>
            <table class="table table-bordered">
                <tr class="info">
                    <td>
                        Numéro de commande
                    </td>
                    <td>
                        Date
                    </td>
                    <td>
                        Fichiers
                    </td>
                    <td>
                        Paiement
                    </td>
                    <td>
                        Statut
                    </td>
                    <td>
                        Facture
                    </td>
                    <td>
                        Date de livraison initialement prévue
                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    @include('includes.futter')
@endsection