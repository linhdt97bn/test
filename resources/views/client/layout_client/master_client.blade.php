<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tour</title>
        <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <base href="{{asset('')}}">

        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesomes.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-icons.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/mytour.css" type="text/css">
        <style type="text/css">


        </style>

        <script src="js/app.js" defer></script>
        <script src="CK/ckeditor.js"></script>
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mytour.js"></script>   
        <script src="js/wow.min.js"></script>      
        <script>
            new WOW().init();
        </script>
    </head>
    <body class="stretched no-transition no-superfish device-touch">
        <div id="app-tour">
            @include('client.layout_client.header_client')
            @include('client.layout_client.modal_client')
            @yield('content')   
            @include('client.layout_client.footer_client')
            <div id="gotoTop" class="icon-angle-up"></div>
        </div>   
    </body>
</html>
