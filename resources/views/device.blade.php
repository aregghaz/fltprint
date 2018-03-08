@extends('page.shop')
@section('title')

@endsection
@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class=" col-md-7">
            <div class="col-md-12 ui ordered steps">
                <div class="active step">

                    <div class="content">
                        <div class="title">Devis / Commander</div>
                    </div>
                </div>
                <div class="step">

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
            <form class="ui form" action="{{ route('identify') }}" method="post">
                <div id="delayBox">
                    <b>Délai de production&nbsp;:</b>
                    <span id="delay_display_line"><span class="available selected">
                        <input type="radio" name="order.delay" id="24" value="24" title="order.delay" checked>24 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" id="48" value="48" title="order.delay">48 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" id="72" value="72" title="order.delay">72 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" id="96" value="96" title="order.delay">96 heures
                    </span><b>(+ livraison)</b>
                </span>
                </div>
                <div class="thead">

                    <div class="row row_option">
                        <div class="col-md-3">Produit</div>
                        <div class="col-md-2">Format</div>
                        <div class="col-md-2">Options</div>
                        <div class="col-md-2 col-md-offset-1">Quantité</div>
                        <div class="col-md-2">Prix HTVA</div>
                    </div>

                </div>
                <div class="select row">
                    <div class="col-md-12 product_select">
                        <div class="col-md-5 select_second">
                            @include('includes.select')
                        </div>
                        <div class="col-md-3 quantity_verification">
                            <label for="verification">Vérification pro des fichiers</label>
                            <input type="checkbox" name="verification" class="verification"
                                   title="Vérification pro des fichiers"><br>
                            <label for="Pliage">Pliage</label>
                            <input type="checkbox" name="Pliage" class="pliage" title="Pliage"><br>
                            <label for="Perforation">Perforation</label>
                            <input type="checkbox" name="Perforation" class="perforation" title="Perforation"><br>
                            <label for="Liassés100">Liassés par 100</label>
                            <input type="checkbox" class='liassésA' name="Liassés100" title="250"><br>
                            <label for="Liassés250">Liassés par 250</label>
                            <input type="checkbox" class="LiassésB" name="Liassés255" title="Liassés250"><br>
                        </div>
                        <div class="col-md-4 count_price">
                            <a href="#">
                                <i id="plus" class="glyphicon glyphicon-plus"></i>
                            </a>
                            @if( !empty($countProduct))
                                <input type="text" class="quantity count_input" readonly="" value="{{ $countProduct }}"
                                       title="">
                            @else
                                <input type="text" class="quantity count_input" readonly="" value="0" title="">
                            @endif
                            <a href="#"><i id="minus" class="glyphicon glyphicon-minus"></i></a>
                            <span>
                        @if( !empty($priceProduct))
                                    <input id="price" class=" price" type="text" value="{{ $priceProduct }}" readonly=""
                                           title="">
                                @else
                                    <input class="quantity price" id="price" type="text" value="0" readonly="" title="">
                                @endif
                        </span><i class="euro icon"></i>
                        </div>
                    </div>
                    <div class="col-md-12 second_select">
                        <div class="col-md-5  select_second">
                            @include('includes.secondSelect')
                        </div>
                        <div class="col-md-3 quantity_verification" style="display: none">
                            <label for="verification">Vérification pro des fichiers</label>
                            <input type="checkbox" name="verification" class="verification"
                                   title="Vérification pro des fichiers"><br>
                            <label for="Pliage">Pliage</label>
                            <input type="checkbox" name="Pliage" class="pliage" title="Pliage"><br>
                            <label for="Perforation">Perforation</label>
                            <input type="checkbox" name="Perforation" class="perforation" title="Perforation"><br>
                            <label for="Liassés100">Liassés par 100</label>
                            <input type="checkbox" class='liassésA' name="Liassés100" title="250"><br>
                            <label for="Liassés250">Liassés par 250</label>
                            <input type="checkbox" class="LiassésB" name="Liassés255" title="Liassés250"><br>
                        </div>
                        <div class="col-md-4 count_price">
                            <a href="#">
                                <i id="plus" class="glyphicon glyphicon-plus"></i>
                            </a>
                            <input type="text" class="quantity count_input" readonly="" value="0" title="">
                            <a href="#">
                                <i id="minus" class="glyphicon glyphicon-minus"></i>
                            </a>
                            <span>
                                <input class="quantity price" type="text" value="0" readonly="" title="">
                            </span>
                            <i class="euro icon"></i>
                        </div>
                    </div>
                    <div class="col-md-12 third_select">
                        <div class="col-md-5 select_second">
                            @include('includes.secondSelect')
                        </div>
                        <div class="col-md-3 quantity_verification" style="display: none">
                            <label for="verification">Vérification pro des fichiers</label>
                            <input type="checkbox" name="verification" class="verification"
                                   title="Vérification pro des fichiers"><br>
                            <label for="Pliage">Pliage</label>
                            <input type="checkbox" name="Pliage" class="pliage" title="Pliage"><br>
                            <label for="Perforation">Perforation</label>
                            <input type="checkbox" name="Perforation" class="perforation" title="Perforation"><br>
                            <label for="Liassés100">Liassés par 100</label>
                            <input type="checkbox" class='liassésA' name="Liassés100" title="250"><br>
                            <label for="Liassés250">Liassés par 250</label>
                            <input type="checkbox" class="LiassésB" name="Liassés255" title="Liassés250"><br>
                        </div>
                        <div class="col-md-4 count_price">
                            <a href="#">
                                <i id="plus" class="glyphicon glyphicon-plus"></i>
                            </a>
                            <input type="text" class="quantity count_input" readonly="" value="0" title="">
                            <a href="#">
                                <i id="minus" class="glyphicon glyphicon-minus"></i>
                            </a>
                            <span>
                                <input class="quantity price" type="text" value="0" readonly="" title="">
                            </span>
                            <i class="euro icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 second_select" id="hiddenSelect" style="display: none">
                    <div class="col-md-5 select_second">
                        @include('includes.secondSelect')
                    </div>
                    <div class="col-md-3 quantity_verification" style="display: none">
                        <label for="verification">Vérification pro des fichiers</label>
                        <input type="checkbox" name="verification" class="verification"
                               title="Vérification pro des fichiers"><br>
                        <label for="Pliage">Pliage</label>
                        <input type="checkbox" name="Pliage" class="pliage" title="Pliage"><br>
                        <label for="Perforation">Perforation</label>
                        <input type="checkbox" name="Perforation" class="perforation" title="Perforation"><br>
                        <label for="Liassés100">Liassés par 100</label>
                        <input type="checkbox" class='liassésA' name="Liassés100" title="250"><br>
                        <label for="Liassés250">Liassés par 250</label>
                        <input type="checkbox" class="LiassésB" name="Liassés255" title="Liassés250"><br>
                    </div>
                    <div class="col-md-4 count_price">
                        <a href="#">
                            <i id="plus" class="glyphicon glyphicon-plus"></i>
                        </a>
                        <input type="text" class="quantity count_input" readonly="" value="0" title="">
                        <a href="#">
                            <i id="minus" class="glyphicon glyphicon-minus"></i>
                        </a>
                        <span>
                                <input class="quantity price" type="text" value="0" readonly="" title="">
                            </span>
                        <i class="euro icon"></i>
                    </div>
                </div>


                <div class="row">
                    <br>
                    <h1 class="ui dividing header"></h1>

                    <div class="col-md-6 for_textArea_order">
                        <label for="order.remarks" style="display: block">Votre remarque accompagnant cette
                            commande</label>
                        <textarea cols="45" name="order.remarks" rows="4" title="order.remarks"></textarea>
                    </div>
                    <div class="col-md-6 method_payments">
                        <div class="votre_pays">
                            <label for="Votre.pays.de.livraison">Votre pays de livraison :
                            </label>
                            <select name="Votre.pays.de.livraison" title="">
                                <option value="BE">Belgique</option>
                                <option value="FR">France</option>
                                <option value="LU">Luxembourg</option>
                            </select>
                        </div>
                        <div class="livraison">
                            <select title="">
                                <option value="DPD">Livraison par DPD en 48h</option>
                            </select>
                            <label for="">
                                <span>0,00</span><i class="euro icon"></i>
                            </label>
                        </div>
                        <div>
                            <label for="method.payment">Méthode de paiement</label>
                            <select name="method.payment" title="">
                                <option value="null">
                                    Méthode de paiement
                                </option>
                                <option value="OGONE">En ligne</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label class="discount_label" for="discounted5">
                                <input id="discounted5" type="checkbox" title="">
                                Je souhaite bénéficier de la ristourne de 5% en incluant le logo
                                FlyPrint sur mes tirages
                            </label>
                            <label class="discount_label" for="discounted25">
                                <input id="discounted25" type="checkbox" title="">
                                Je souhaite bénéficier de la ristourne de 25% en laissant
                                FlyPrint imprimer sa publicité au dos de mes flyers
                            </label>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <h1 class="ui dividing header"></h1>
                            <p class="count_paymant"><strong>Total HTVA an <span id="total"> </span> <i class="euro icon"></i></strong></p>
                            <p class="count_paymant">Total TVAC (21%) <span id="nds"> </span><i class="euro icon"></i></p>
                        </div>
                        <div class="col-md-12 text_permision">
                            La première quantité affichée est la quantité par défaut.
                            Il n'y a pas de droit de rétractation sur les produits en fabrication.
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="{{  Session::token() }}">
                    <div class="row">
                        <div class="col-md-12 sendin_button">
                            <div class="col-md-7">
                                <p> Date de livraison probable&nbsp;:</p>
                            </div>
                            <div class="col-md-3 col-md-offset-2">
                                <button class="ui black basic button" type="submit">Passer commande</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <div class="left floated column">
                <a id="divace" href="" class="ui black basic button button_price_list" type="submit">Devis</a>
            </div>
            <div class="row">

                <div class="row futter_body">
                    <div class="col-md-12 futter_image">
                        <div class="col-md-3" style="padding: 0!important;">
                            <img src="{{ URL::to('src/img/image_debord.gif')}}" style="float: left" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-2 futter_text">
                                <img src="{{ URL::to('src/img/zone_de_coupe.gif')}}" height="80" align="middle" alt="">
                            </div>
                            <div class="col-md-10">
                                <p>Zone de coupe au format choisi (ex. a6 = 105x148 mm)</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-2 futter_text">
                                <img src="{{ URL::to('src/img/zone_fichier.gif')}}" height="80" align="middle" alt="">
                            </div>
                            <div class="col-md-10">
                                Zone de fichier, débord de 3mm tout autour inclus (ex. a6 = 111x154 mm)
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-2 ">
                                <img src="{{ URL::to('src/img/zone_de_texte.gif')}}" height="80" align="middle" alt="">
                            </div>
                            <div class="col-md-10">
                                Zone de texte à l'intérieur de (et non contre) la zone de coupe. Gardez des marges de
                                3mm toutautour(ex. a6 = 99x142 mm)
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <img src="{{ URL::to('src/img/ok.png')}}" class="futter_img_ok" align="middle" alt="">
                            </div>
                            <div class="col-md-9 ui huge labels futers_label">
                                <div class="ui label label_ok">JPG</div>
                                <div class="ui label label_ok">TIF</div>
                                <div class="ui label label_ok">EPS</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <img src="{{ URL::to('src/img/mid_ok.png')}}" class="futter_img_ok" align="middle"
                                     alt="">
                            </div>
                            <div class="col-md-9 ui huge labels futers_label">
                                <div class="ui  label futers_maybe">PSD</div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <img src="{{ URL::to('src/img/ko.png')}}" class="futter_img_ok" align="middle" alt="">
                            </div>
                            <div class="col-md-9 ui huge labels futers_label">
                                <div class="ui label futers_label_no">CDR</div>
                                <div class="ui label futers_label_no">DOC</div>
                                <div class="ui label futers_label_no">PUB</div>
                                <div class="ui label futers_label_no">PPT</div>
                                <div class="ui label futers_label_no">XLS</div>
                                <div class="ui label futers_label_no">AI</div>
                                <div class="ui label futers_label_no">IND</div>
                                <div class="ui label futers_label_no">GIF</div>
                            </div>

                        </div>
                    </div>
                    <ul class="col-md-6">
                        <li class="item  futter_text_img">
                            réalisez vos fichiers en 600 dpi (sauf pour les affiches en 300 dpi)
                        </li>
                        <li class="item futter_text_img">
                            aplanissez toujours vos pdf (en l'ouvrant dans Photoshop)
                        </li>
                        <li class="item futter_text_img">
                            n'oubliez pas le débord de 3mm tout autour de votre fichier
                        </li>
                        <li class="item futter_text_img">
                            évitez le fichiers .psd, trop lourds à envoyer
                        </li>
                        <li class="item futter_text_img">
                            couleurs CMJN (et pas RVB)
                        </li>
                        <li class="item futter_text_img">
                            nous n'acceptons plus les fichiers en rouge (voir ci-contre)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('includes.futter')
    <script>
        var token = '{{  Session::token() }}';
        var urlForFormat = '{{ route('Flyers') }}';
        var urlSelect = '{{ route('urlSelect') }}';
        var download = '{{ route('htmltopdfview',['download'=>'pdf']) }}';
    </script>
@endsection
