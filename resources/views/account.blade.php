@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">

                <form class="form-horizontal" action="{{ 'changeAccount' }}" method="post">
                    <div class="col-md-7 coordinate">
                        <h3><span class="label label-primary">Vos coordonnées</span></h3>
                        <div class="form-group">
                            @foreach($info as $value)
                                <label class="col-md-5 registration_label" for="name">Nom</label>
                            <div class="col-md-6 registration_label">
                                <input name="name" type="text" class="form-control" id="name" value="{{$value->name}}">
                            </div>
                                @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="portable">N° de portable</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" name="portable" class="form-control" id="portable" value="{{$value->portable}}">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group ">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="email">E-mail</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" title="email" name="email" class="form-control"  id="Nom" value="{{$value->email}}">
                            </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-md-7 coordinate">
                        <h3><span class="label label-primary">Adresse de livraison</span></h3>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="company">Société</label>
                            <div class="col-md-6 registration_label">
                                <input name="company" type="text" class="form-control" id="Société" value="{{$value->company}}" placeholder="Société">

                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="companyName">Nom</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" name="companyName" class="form-control" id="companyName"
                                       placeholder="Nom" value="{{$value->companyName}}">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="telephone">N° de téléphone</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" name="telephone" class="form-control" value="{{$value->telephone}}" id="telephone"
                                       placeholder="N° de téléphone">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="address">Adresse</label>
                            <div class="col-md-6 registration_label">
                                <input name="address" type="text" class="form-control" id="address"
                                       placeholder="Confirmez e-mail" value="{{$value->address}}">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="addressElse"></label>
                            <div class="col-md-6 registration_label">
                                <input name="addressElse" title="" type="text" class="form-control" value="{{$value->addressElse}}" id="Confirmez">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="postalCode">Code postal</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" name="postalCode" class="form-control" value="{{$value->postalCode}}" id="postalCode"
                                       placeholder="Code postal">
                            </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            @foreach($info as $value)
                            <label class="col-md-5 registration_label" for="city">Ville</label>
                            <div class="col-md-6 registration_label">
                                <input type="text" name="city" class="form-control" id="city"
                                       placeholder="Ville" value="{{$value->city}}">
                            </div>
                            @endforeach
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

                    <div class="col-md-7 button_submit">

                        <input type="hidden" name="_token" value="{{  Session::token() }}">

                        <button type="submit" class="btn btn-default">Sauver les informations</button>
                    </div>
                </form>

        </div>
    </div>
    @include('includes.futter')
@endsection