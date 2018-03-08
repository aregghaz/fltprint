@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h3>Vérification des fichiers</h3>
            <div class="col-md-9">
                <p>Nous contrôlons la dimension et la résolution de vos fichiers. Idéalement, nous avons besoin de
                    fichiers en PDF ou JPEG, en 300 dpi minimum (idéalement 600 dpi, sauf pour les affiches) au format
                    fini, plus 3 mm de débord tout autour pour la coupe.</p>
            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection