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
            @include('includes.message')
            <form class="form-horizontal" action="{{ route('registrationUser') }}" method="post">
                <div class="col-md-7 coordinate">
                    <h3><span class="label label-primary">Vos coordonnées</span></h3>
                    <div class="form-group {{$errors->has('name') ? 'has-error': '' }}">
                        <label class="col-md-5 registration_label" for="name">Nom</label>
                        <div class="col-md-6 registration_label">
                            <input name="name" type="text" class="form-control" id="name" value="{{ Request::old('name') }}" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="portable">N° de portable</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="portable" class="form-control" id="portable"
                                   placeholder="N° de portable">
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error': '' }}">
                        <label class="col-md-5 registration_label" for="email">E-mail</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="email" class="form-control" value="{{ Request::old('email') }}" id="Nom" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('emailRe') ? 'has-error': '' }}">
                        <label class="col-md-5 registration_label" for="emailRe">Confirmez votre e-mail</label>
                        <div class="col-md-6 registration_label">
                            <input name="emailRe" type="text" class="form-control" value="{{ Request::old('emailRe') }}" id="Confirmez"
                                   placeholder="Confirmez e-mail">
                        </div>
                    </div>
                    <div class="form-group {{$errors->has('password') ? 'has-error': '' }}">
                        <label class="col-md-5 registration_label" for="password">Mot de passe</label>
                        <div class="col-md-6 registration_label">
                            <input name="password" type="password" class="form-control" id="Confirmez"
                                   placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="passwordRe">Confirmez votre mot de passe</label>
                        <div class="col-md-6 registration_label">
                            <input type="password" name="passwordRe" class="form-control" id="exampleInputPassword1"
                                   placeholder="Confirmez passe">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 coordinate">
                    <h3><span class="label label-primary">Adresse de livraison</span></h3>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="company">Société</label>
                        <div class="col-md-6 registration_label">
                            <input name="company" type="text" class="form-control" id="Société " placeholder="Société">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="companyName">Nom</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="companyName" class="form-control" id="companyName"
                                   placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="telephone">N° de téléphone</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="telephone" class="form-control" id="telephone"
                                   placeholder="N° de téléphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="address">Adresse</label>
                        <div class="col-md-6 registration_label">
                            <input name="address" type="text" class="form-control" id="address"
                                   placeholder="Confirmez e-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="addressElse"></label>
                        <div class="col-md-6 registration_label">
                            <input name="addressElse" title="" type="text" class="form-control" id="Confirmez">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="postalCode">Code postal</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="postalCode" class="form-control" id="postalCode"
                                   placeholder="Code postal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="city">Ville</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="city" class="form-control" id="city"
                                   placeholder="Ville">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="payment">Pays</label>
                        <select class="form-control" name="payment" style="width: auto!important;">
                            <option selected="selected" value="BE">Belgique</option>
                            <option value="FR">France</option>
                            <option value="LU">Luxembourg</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7 coordinate">
                    <h3><span class="label label-primary">Coordonnées de facturation</span></h3>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="nom">Société</label>
                        <div class="col-md-6 registration_label">
                            <input name="companyRe" type="text" class="form-control" id="Société " placeholder="Société">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="nameRe">Nom</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="nameRe" class="form-control" id="Nom"
                                   placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="telephoneRe">N° de téléphone</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="telephoneRe" class="form-control" id="telephoneRe" placeholder="N° de téléphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="nds">TVA</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="nds" class="form-control" id="TVA" placeholder="TVA">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="addressRe">Adresse</label>
                        <div class="col-md-6 registration_label">
                            <input name="addressRe" type="text" class="form-control" id="Adresse"
                                   placeholder="Confirmez e-mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="addressElseRe"></label>
                        <div class="col-md-6 registration_label">
                            <input name="addressElseRe" title="" type="text" class="form-control" id="Confirmez">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="postalRe">Code postal</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="postalRe" class="form-control" id="Code postal"
                                   placeholder="Code postal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="cityRe">Ville</label>
                        <div class="col-md-6 registration_label">
                            <input type="text" name="cityRe" class="form-control" id="Ville"
                                   placeholder="Ville">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 registration_label" for="paymantesRe">Pays</label>
                        <select class="form-control" name="paymantesRe" style="width: auto!important;">
                            <option selected="selected" value="BE">Belgique</option>
                            <option value="FR">France</option>
                            <option value="LU">Luxembourg</option>
                        </select>
                    </div>


                </div>
                <div class="col-md-7 button_submit">
                    <input type="hidden" name="_token" value="{{  Session::token() }}">

                    <button type="submit" class="btn btn-default">Créer mon compte</button>
                </div>
            </form>

        </div>
    </div>

@endsection