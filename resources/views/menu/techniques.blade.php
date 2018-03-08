@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class="col-md-6">
            <h5 class="under_line" >Comment transférer vos fichiers?</h5>
            <div class="col-md-9">
                <p>L'idéal sont les Pdf aplanis ou les Jpeg au moins en 300 dpi (idéalement 600 dpi, sauf pour les
                    affiches) avec un débord de 3mm tout autour. De préférence en CMJN plutôt qu'en RVB.</p>
                <br>
                <p> NOUS N'ACCEPTONS PLUS LES FICHIERS WORD, PUBLISHER, POWERPOINT, et autres programmes
                    non-professionnels, vous DEVEZ enregistrer vos fichiers en PDF aplanis.</p>
                <br>
                <p>Nous traitons aussi, sans supplément, les fichiers Photoshop ".psd", les fichiers Tiff ".tif".
                    Enregistrez vos fichiers Illustrator en PDF aplani. </p>
                <p>Nous demandons des fichiers avec un débord de 3mm tout autour, si vos fichiers n'en sont pas munis,
                    nous placerons un cadre de la couleur qui conviendra le mieux du point de vue de notre graphiste
                    afin de conserver les délais prévus.</p>
                <br>
                <p>Ne compressez pas vos fichiers à l'aide de programmes secondaires tel que ZIP, RAR, Stuff, ....</p>
                <br>
                <br>
                <p>Aplanissez toujours vos documents PDF et Photoshop. N'utilisez pas de couleur de plus de 240%, dans
                    ce cas, nous ne serions pas responsables du maculage. Pour un noir de qualité, réalisez-le en 40%
                    cyan + 40% magenta + 20% jaune + 100% noir. Evitez les cadres qui posent des problèmes de coupes,
                    l'impression en amalgame donne un peu moins de précision au rognage.
                </p>
                <br>
                <p>
                    Pour les fichiers CorelDraw, Word, Powerpoint, Publisher et autres programmes non graphiques,
                    merci de convertir vos documents en PDF.
                </p>
                <br>
                <p>
                    Merci de réaliser vos fichiers en PDF ou en JPEG, en minimum 300 dpi (idéalement en 600 dpi, sauf pour les affiches) avec un débord de 3mm tout autour
                    afin de vous garantir un maximum de qualité à la coupe.
                </p>
            </div>
        </div>
    </div>
    @include('includes.futter')
@endsection