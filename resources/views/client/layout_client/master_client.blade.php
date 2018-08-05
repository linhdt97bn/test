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
        <style type="text/css">

            .entry-content ul {
                margin-bottom: 10px;
            }
            .entry-content ul li {
                margin-left: 50px;
            }
            .entry-content p {
                margin-bottom: 10px;
            }
            .glyphicon-remove {
                cursor: pointer;
            }
        </style>

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
        @include('client.layout_client.header_client')
        @include('client.layout_client.modal_client')
        @yield('content')   
        @include('client.layout_client.footer_client')
        <div id="gotoTop" class="icon-angle-up"></div>
    </body>
</html>
