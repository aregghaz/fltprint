@extends('page.shop')
@section('title')

@endsection
@section('content')
    @include('includes.header')
    <div class="row body_shop">
    @include('includes.body-slider')
        <div class="col-md-8  ">
            <div class="col-md-12 ui ordered steps" style="margin-bottom: 30px">
                <div class="completed step">
                    <div class="content ">
                        <div class="title">Devis / Commander</div>
                    </div>
                </div>
                <div class="active step">

                    <div class="content">
                        <div class="title">S'identifier</div>
                    </div>
                </div>
                <div class="step">

                    <div class="content">
                        <div class="title">Récapitulatif</div>
                    </div>
                </div>
                <div class="step">

                    <div class="content">
                        <div class="title">Envoyer mes fichiers</div>
                    </div>
                </div>
            </div>
        </div>
<div class="col-md-8">
    @include('includes.message')
</div>
<div class="col-md-5">

    <form action="{{route('registration')}}" method="post">
        <div class="form-group">
            <label for="email">Entrez votre adresse email:</label>
            <input type="email" name="email" class="form-control"  id="email" placeholder="Email">
        </div>

        <div class="radio">
            <label>
                <input name="create" type="radio" value="true" checked>Vous êtes un nouveau client<br>
                (Création de votre compte FlyPrint)
            </label>
        </div>
        <div class="radio">
            <label>
                <input name="create" type="radio" value="false">Vous êtes déjà client et votre mot de passe est<br>
                (Indiquez votre adresse e-mail ci-dessus et votre mot de passe ci-dessous)
            </label>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
        </div>

        <div class="checkbox">
            <label>
                <input type="checkbox"> Se souvenir de moi
            </label>
        </div>
        <input type="hidden" name="_token" value="{{  Session::token() }}">
        <button type="submit" class="btn btn-default">Continuer</button>
        <button type="submit" class="btn btn-default">Mot de passe perdu!</button>
    </form>
</div>
    </div>
@endsection