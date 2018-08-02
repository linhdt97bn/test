<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hướng dẫn viên</title>
    <base href="{{asset('')}}">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/hdv-admin.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        .lotrinh{
            margin-top: 15px;
        }

        .lotrinh label, .lotrinh select, .lotrinh textarea{
            margin-left: 20px;
        }

        .lotrinh .form-control {
            width: 97%;
        }

        .ngaydi{
            display: block;
            margin-left: 10px !important;
            color: red;
        }

        .glyphicon-remove{
            cursor: pointer;
            color: red;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->

        @include('hdv.layout_hdv.header')
        @yield('content')
    </div>
    <!-- /#wrapper -->
    <script src="CK/ckeditor.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="js/hdv-admin.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
    </script>
    @yield('script')
</body>
</html>
