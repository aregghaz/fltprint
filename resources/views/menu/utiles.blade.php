@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Informations utiles</h3>
            <div class="col-md-9">
                <p>Sauf stipulation contraire, la livraison est réputée effectuée dans nos locaux. Si cette livraison
                    est retardée pour une raison indépendante de notre volonté, elle sera réputée avoir été effectuée à
                    la date convenue.</p>
                <br>
                <p> Les marchandises voyagent aux frais, risques et périls de l'acheteur. Il en résulte notamment que les marchandises voyagent aux risques et périls de l'acheteur auquel il appartient en cas d'avaries, de perte ou de manquants, de faire toutes réserves ou d'exercer tous recours auprès des transporteurs responsables.</p>
            <br>
                <p>Vréven Photogravure sprl décline toute responsabilité sur les marchandises qui mêmes envoyées franco voyagent toujours aux risques et périls de l'acheteur.</p>

            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection