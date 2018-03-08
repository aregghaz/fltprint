<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/bootstrype.css')}}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>


<div class="row">

    <table class="table table-bordered" style="width: 300px">
        <tr>
            <th>Devis</th>
            <th>Date</th>
        </tr>
        <tr>
            <th></th>
            <th><?php echo date("m.d.y") ?></th>
        </tr>
    </table>


    <table class="table table-bordered" style="min-height: 1000px!important;">
        <tr style="text-align: center">
            <th style="text-align: center">Désignation : Devis du <?php echo date("m.d.y") ?></th>
            <th style="text-align: center">Format</th>
            <th style="text-align: center">Count</th>
            <th style="text-align: center">Prix htva</th>

        </tr>

        @if(!empty($product[0]) and !empty($count[0]))
            <tr>
                <th>{{$product[0]}}</th>
                <th>{{ $format[0] }}</th>
                <th>{{ $productCount[0] }} ex.</th>
                <th>{{$count[0] }}€</th>
            </tr>
        @endif
        @if(!empty($product[1]) and !empty($count[1]))
            <tr>
                <th>{{$product[1]}}</th>
                <th>{{ $format[1] }}</th>
                <th>{{ $productCount[1] }} ex.</th>
                <th>{{$count[1] }}€</th>
            </tr>
        @endif
        @if(!empty($product[2]) and !empty($count[2]))
            <tr>
                <th>{{$product[2]}}</th>
                <th>{{ $format[2] }}</th>
                <th>{{ $productCount[2] }} ex.</th>
                <th>{{$count[2] }}€</th>
            </tr>
        @endif
        @if(!empty($product[3]) and !empty($count[3]))
            <tr>
                <th>{{$product[3]}}</th>
                <th>{{ $format[3] }}</th>
                <th>{{ $productCount[3] }} ex.</th>
                <th>{{$count[3] }}€</th>
            </tr>
        @endif
        @if(!empty($product[4]) and !empty($count[4]))
            <tr>
                <th>{{$product[4]}}</th>
                <th>{{ $format[4] }}</th>
                <th>{{ $productCount[4] }} ex.</th>
                <th>{{$count[4] }}€</th>
            </tr>
        @endif
        @if(!empty($product[5]) and !empty($count[5]))
            <tr>
                <th>{{$product[5]}}</th>
                <th>{{ $format[5] }}</th>
                <th>{{ $productCount[5] }} ex.</th>
                <th>{{$count[5] }}€</th>
            </tr>
        @endif
        @if(!empty($product[6]) and !empty($count[6]))
            <tr>
                <th>{{$product[6]}}</th>
                <th>{{ $format[6] }}</th>
                <th>{{ $productCount[6] }} ex.</th>
                <th>{{$count[6] }}€</th>
            </tr>
        @endif
        @if(!empty($product[7]) and !empty($count[7]))
            <tr>
                <th>{{$product[7]}}</th>
                <th><{{ $format[7] }}/th>
                <th>{{ $productCount[7] }} ex.</th>
                <th>{{$count[7] }}€</th>
            </tr>
        @endif
        @if(!empty($product[8]) and !empty($count[8]))
            <tr>
                <th>{{$product[8]}}</th>
                <th><{{ $format[8] }}/th>
                <th>{{ $productCount[8] }} ex.</th>
                <th>{{$count[8] }}€</th>
            </tr>
        @endif
        @if(!empty($product[9]) and !empty($count[9]))
            <tr>
                <th>{{$product[9]}}</th>
                <th><{{ $format[9] }}/th>
                <th>{{ $productCount[9] }} ex.</th>
                <th>{{$count[9] }}€</th>
            </tr>
        @endif
        @if(!empty($product[10]) and !empty($count[10]))
            <tr>
                <th>{{$product[10]}}</th>
                <th><{{ $format[10] }}/th>
                <th>{{ $productCount[10] }} ex.</th>
                <th>{{$count[10] }}€</th>
            </tr>
        @endif
        @if(!empty($product[11]) and !empty($count[11]))
            <tr>
                <th>{{$product[11]}}</th>
                <th><{{ $format[11] }}/th>
                <th>{{ $productCount[11] }} ex.</th>
                <th>{{$count[11] }}€</th>
            </tr>
        @endif
        @if(!empty($product[12]) and !empty($count[12]))
            <tr>
                <th>{{$product[12]}}</th>
                <th><{{ $format[12] }}/th>
                <th>{{ $productCount[12] }} ex.</th>
                <th>{{$count[12] }}€</th>
            </tr>
        @endif
        @if(!empty($product[13]) and !empty($count[13]))
            <tr>
                <th>{{$product[13]}}</th>
                <th><{{ $format[13] }}/th>
                <th>{{ $productCount[13] }} ex.</th>
                <th>{{$count[13] }}€</th>
            </tr>
        @endif
    </table>
    <table class="table table-bordered">
        <tr>
            <th>Total marchandise</th>
            <th>Frais de livraison</th>
            <th>Taux TVA</th>
            <th>TVA</th>
            <th>Total à payer</th>
        </tr>
        <tr>
            <th>{{ $totalCount[0] }} €</th>
            <th></th>
            <th>21%</th>
            <th></th>
            <th>{{ $totalPrice[0] }} €</th>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <th>Type de paiement</th>
            <th>Référence du paiement</th>
            <th>Déjà Payé</th>
            <th>Reste à payer</th>

        </tr>
        <tr>
            <th></th>
            <th></th>
            <th>21%</th>
            <th></th>

        </tr>
    </table>
</div>
<div>
    <p style="text-align: center"><u>FlyPrint est un service de la photogravure Vreven sprl. Conditions générales de
            vente
            sur le site www.flyprint.be</u>
        http://www.flyprint.be - TVA BE 0471.576.782 - R.P.M. : Liège - Fortis 240-0501320-28

    </p>
</div>
</body>
</html>