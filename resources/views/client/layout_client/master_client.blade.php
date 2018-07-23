<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tour</title>
        <base href="{{asset('')}}">

        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesomes.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-icons.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/mytour.css" type="text/css">

        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mytour.js"></script>   
    </head>
    <body class="stretched no-transition no-superfish device-touch">
        @include('client.layout_client.header_client')
        @include('client.layout_client.modal_client')
        @yield('content')   
        @include('client.layout_client.footer_client')
    </body>
</html>
