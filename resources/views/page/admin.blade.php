<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">


    <link href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/components/modal.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">

    <script src="{{ URL::to('src/js/jquery-3.1.0.min.js')}}"></script>
    <script src="{{ URL::to('src/js/semantic.min.js')}}"></script>
    <script src="{{ URL::to('src/js/jquery-ui.js')}}"></script>
    <script src="{{ URL::to('src/js/modal.min.js')}}"></script>
    <link rel="stylesheet" href="{{ URL::to('src/css/menu.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('src/css/style.css')}}">

</head>
<body>
<div id="asd"></div>



@yield('content')


</body>
<script src="{{ URL::to('src/js/jquery-3.1.0.min.js')}}"></script>
<script src="{{ URL::to('src/js/modal.min.js')}}"></script>
<script src="{{ URL::to('src/js/semantic.min.js')}}"></script>
<script src="{{ URL::to('src/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('src/js/admin.js')}}"></script>
</html>