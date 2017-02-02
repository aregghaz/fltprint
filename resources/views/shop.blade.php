@extends('page.index')
@section('title')

@endsection
@section('content')
    @include('includes.hidden_table')
    @include('includes.header')
    <div class="ui fourteen column centered grid body">
        @include('includes.body-slider')
        <div class="ten wide column shop_body">
            <div class="ui steps">
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
            <form class="ui form" action="">
                <div id="delay-box">
                    <b>Délai de production&nbsp;:</b>
                    <span id="delay_display_line"><span class="available selected">
                        <input type="radio" name="order.delay" value="24" title="order.delay" checked>24 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" value="48" title="order.delay">48 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" value="72" title="order.delay">72 heures
                    </span>
                    <span class="available">
                        <input type="radio" name="order.delay" value="96" title="order.delay">96 heures
                    </span><b> (+ livraison)</b>
                </span>
                </div>
                <table class="thead" width="100%">
                    <thead>
                    <tr class=" product_name">
                        <th width="25%">Produit</th>
                        <th width="25%">Format</th>
                        <th width="17%">Options</th>
                        <th width="17%">Quantité</th>
                        <th width="17%">Prix HTVA</th>
                    </tr>
                    </thead>
                </table>

                <div class="column product_select">

                    @include('includes.select')
                    <div class="quantity_verification">
                        <label for="verification">Vérification pro des fichiers</label>
                        <input type="checkbox" name="verification" id="verification"
                               title="Vérification pro des fichiers"><br>
                        <label for="Pliage">Pliage</label>
                        <input type="checkbox" name="Pliage" id="pliage" title="Pliage"><br>
                        <label for="Perforation">Perforation</label>
                        <input type="checkbox" name="Perforation" id="perforation" title="Perforation"><br>
                        <label for="Liassés100">Liassés par 100</label>
                        <input type="checkbox" id='liassésA' name="Liassés100" title="250"><br>
                        <label for="Liassés250">Liassés par 250</label>
                        <input type="checkbox" id="LiassésB" name="Liassés255" title="Liassés250"><br>
                    </div>

                    <div class="count_price">
                        <a href="#">
                            <i class="plus icon"></i>
                        </a>
                        @if( !empty($countProduct))
                            <input type="text" class="quantity" id="count" readonly="" value="{{ $countProduct }}" title="">

                        @else
                            <input type="text" class="quantity" id="count" readonly="" value="0" title="">
                        @endif
                        <a href="#">
                            <i class="minus icon"></i>
                        </a>

                        <span>
                        @if( !empty($priceProduct))
                                <input class="quantity" id="price" type="text" value="{{ $priceProduct }}" readonly=""
                                       title="">
                            @else
                                <input class="quantity" id="price" type="text" value="0" readonly="" title="">
                            @endif
                        </span><i class="euro icon"></i>
                    </div>
                </div>
            </form>

            <div class="second_select ">
                <div class="select_second">
                    @include('includes.secondSelect')
                </div>
                <div class="quantity_verification" style="display: none">
                    <label for="verification">Vérification pro des fichiers</label>
                    <input type="checkbox" name="verification" id="verification"
                           title="Vérification pro des fichiers"><br>
                    <label for="Pliage">Pliage</label>
                    <input type="checkbox" name="Pliage" id="pliage" title="Pliage"><br>
                    <label for="Perforation">Perforation</label>
                    <input type="checkbox" name="Perforation" id="perforation" title="Perforation"><br>
                    <label for="Liassés100">Liassés par 100</label>
                    <input type="checkbox" id='liassésA' name="Liassés100" title="250"><br>
                    <label for="Liassés250">Liassés par 250</label>
                    <input type="checkbox" id="LiassésB" name="Liassés255" title="Liassés250"><br>
                </div>
                <div class="count_price">
                    <a href="#">
                        <i class="plus icon"></i>
                    </a>
                    <input type="text" class="quantity" readonly="" value="0" size="6" title="">
                    <a href="#">
                        <i class="minus icon"></i>
                    </a>
                    <span id="priceCount">0.00</span><i class="euro icon"></i>
                </div>
            </div>

            <div class="third_select">
                <div class="select_second">
                    @include('includes.secondSelect')
                </div>
                <div class="quantity_verification" style="display: none">
                    <label for="verification">Vérification pro des fichiers</label>
                    <input type="checkbox" name="verification" id="verification"
                           title="Vérification pro des fichiers"><br>
                    <label for="Pliage">Pliage</label>
                    <input type="checkbox" name="Pliage" id="pliage" title="Pliage"><br>
                    <label for="Perforation">Perforation</label>
                    <input type="checkbox" name="Perforation" id="perforation" title="Perforation"><br>
                    <label for="Liassés100">Liassés par 100</label>
                    <input type="checkbox" id='liassésA' name="Liassés100" title="250"><br>
                    <label for="Liassés250">Liassés par 250</label>
                    <input type="checkbox" id="LiassésB" name="Liassés255" title="Liassés250"><br>
                </div>
                <div class="count_price">
                    <a href="#">
                        <i class="plus icon"></i>
                    </a>
                    <input type="text" class="quantity" readonly="" value="0" size="6" title="">
                    <a href="#">
                        <i class="minus icon"></i>
                    </a>
                    <span id="priceCount">0.00</span><i class="euro icon"></i>
                </div>
            </div>
            <h1 class="ui dividing header"></h1>
            <div class="ui grid">
                <div class="eight wide column for_textArea_order">
                    <label for="order.remarks" style="display: block">Votre remarque accompagnant cette commande</label>
                    <textarea cols="45" name="order.remarks" rows="4" title="order.remarks"></textarea>
                </div>
                <div class="eight wide column method_payments">
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
                <div class="eight wide column ">
                    <input name="order.logoDiscounted" type="checkbox" title="">
                    <label for="order.logoDiscounted">Je souhaite bénéficier de la ristourne de 5% en incluant le logo
                        FlyPrint
                        sur mes tirages</label><br>
                    <input name="order.versoDiscounted" type="checkbox" title="">
                    <label for="order.versoDiscounted">Je souhaite bénéficier de la ristourne de 25% en laissant
                        FlyPrint
                        imprimer sa publicité au dos de mes flyers</label>
                </div>
                <div class="eight wide column">
                    <h1 class="ui dividing header"></h1>
                    <p class="count_paymant"><strong>Total HTVA <i class="euro icon"></i></strong></p>
                    <p class="count_paymant">Total TVAC (21%)<i class="euro icon"></i></p>
                </div>
                <div class="sixteen wide column small_text">La première quantité affichée est la quantité par défaut.
                    Il n'y a pas de droit de rétractation sur les produits en fabrication.
                </div>
            </div>
            <div class="ui grid sending_request">
                <div class="three column row">
                    <div class="left floated column">Date de livraison probable&nbsp;:
                        <span></span>
                    </div>
                    <div class="right floated column sending_button">
                        <button class="ui black basic button" type="submit">Passer commande</button>
                    </div>
                </div>
            </div>
            <div class="ui grid">
                <div class="left floated column">
                    <button class="ui black basic button button_price_list" type="submit">Devis</button>
                </div>
            </div>
            <div class="ui grid body_futter">
                <div class="sixteen wide column futter_image">
                    <img src="{{ URL::to('src/img/image_debord.gif')}}" style="float: left" alt="">
                    <div class=" column">
                        <p class="futter_text">
                            <img src="{{ URL::to('src/img/zone_de_coupe.gif')}}" height="80" align="middle" alt="">
                            Zone de coupe au format choisi (ex. a6 = 105x148 mm)</p>
                    </div>
                    <div class="column">
                        <p class="futter_text"><img src="{{ URL::to('src/img/zone_fichier.gif')}}" height="80"
                                                    align="middle" alt="">Zone de
                            fichier, débord de 3mm tout autour inclus (ex. a6 = 111x154 mm)</p>
                    </div>
                    <div class="column">
                        <p class="futter_text"><img src="{{ URL::to('src/img/zone_de_texte.gif')}}" height="80"
                                                    align="middle" alt="">Zone
                            de texte à l'intérieur de (et non contre) la zone de coupe. Gardez des marges de 3mm tout
                            autour(ex. a6 = 99x142 mm)</p>
                    </div>
                </div>
                <div class="ui list">
                    <div class="item">
                        <img src="{{ URL::to('src/img/ok.png')}}" class="futter_img_ok" align="middle" alt="">
                        <div class="ui huge labels futers_label">
                            <div class="ui label label_ok">JPG</div>
                            <div class="ui label label_ok">TIF</div>
                            <div class="ui label label_ok">EPS</div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img src="{{ URL::to('src/img/mid_ok.png')}}" class="futter_img_ok" align="middle" alt="">
                            <div class="ui huge labels futers_label">
                                <div class="ui  label futers_maybe">PSD</div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <img src="{{ URL::to('src/img/ko.png')}}" class="futter_img_ok" align="middle" alt="">
                            <div class="ui huge labels futers_label">
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
                </div>
                <div class="ui bulleted list">
                    <div class="item  futter_text_img">réalisez vos fichiers en 600 dpi (sauf pour les affiches en
                        300 dpi)
                    </div>
                    <div class="item futter_text_img">aplanissez toujours vos pdf (en l'ouvrant dans Photoshop)
                    </div>
                    <div class="item futter_text_img">n'oubliez pas le débord de 3mm tout autour de votre fichier
                    </div>
                    <div class="item futter_text_img">évitez le fichiers .psd, trop lourds à envoyer</div>
                    <div class="item futter_text_img">couleurs CMJN (et pas RVB)</div>
                    <div class="item futter_text_img">nous n'acceptons plus les fichiers en rouge (voir ci-contre)
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.futter')
    <script>
        var token = '{{  Session::token() }}';
        var urlForFormat = '{{ route('Flyers') }}';
        var urlForFormat170 = '{{ route('urlForFormat170') }}';
        var urlForFormat250 = '{{ route('urlForFormat250') }}';
        var urlForFormat300 = '{{ route('Flyers300Select') }}';
        var urlForFormat300Plastic = '{{ route('urlForFormat300PlasticSelect') }}';
        var urlFlyers350Select = '{{ route('urlFlyers350Select') }}';
        var urlFlyers300GreenLineSelect = '{{ route('Flyers300GreenLineSelect') }}';
        var urlAffiches135FormatSelect = '{{ route('urlAffiches135FormatSelect') }}';
        var urlAffiches1FormatSelect = '{{ route('urlAffiches1FormatSelect') }}';
        var urlAffichesGrandFormatSelect = '{{ route('urlAffichesGrandFormatSelect') }}';
        var urlAffichesDigitaleFormatSelect = '{{ route('urlAffichesDigitaleFormatSelect') }}';
        var urlShopAffichesGreenFormatSelect = '{{ route('urlAffichesGreenFormatSelect') }}';
        var urlAffichesRectoFormatSelect = '{{ route('urlAffichesRectoFormatSelect') }}';
        var urlDepliants135FormatSelect = '{{ route('urlDepliants135FormatSelect') }}';
        var urlCarteVisiteBrillante = '{{ route('urlCarteVisiteBrillante') }}';
        var urlCarteVisiteMatte = '{{ route('urlCarteVisiteMatte') }}';
        var urlCarteVisiteGreenFormatSelect = '{{ route('urlCarteVisiteGreenFormatSelect') }}';
        var urlCarte300FormatSelect = '{{ route('urlCarte300FormatSelect') }}';
        var urlCarteDeluxeFormatSelect = '{{ route('urlCarteDeluxeFormatSelect') }}';
        var urlFlyers350Brilante = '{{ route('urlFlyers350Brilante') }}';
        var urlFlyers350Platic = '{{ route('urlFlyers350Platic') }}';
        var urlSelect = '{{ route('urlSelect') }}';

    </script>
@endsection
