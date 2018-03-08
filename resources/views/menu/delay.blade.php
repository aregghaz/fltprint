@extends('page.index')
@section('title')

@endsection

@section('content')
@include('includes.header')
<div class="row body_shop">
    @include('includes.body-slider')
    <div class="col-md-6">
        <h3>Délai ultra rapide</h3>
        <div class="col-md-9">
            <p>Nous disposons de productions journalières. Nous vous invitons à voir nos délais et nos prix de production directement dans notre devis en ligne :</p>

            <a href="{{ route('device') }}">DEVIS en LIGNE</a>
            <br>
            <br>
            <br>
            <p> Vous y trouverez tous les détails et possibilités de livraison par rapport à votre pays et région.</p>
        </div>

    </div>
 </div>
@include('includes.futter')
@endsection