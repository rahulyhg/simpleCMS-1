<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="{{ asset("admin_template/vendor/bootstrap/css/bootstrap.min.css") }}">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="{{ asset("admin_template/vendor/font-awesome/css/font-awesome.min.css") }}">
        <!-- Custom icon font-->
        <link rel="stylesheet" href="{{ asset("admin_template/css/fontastic.css") }}">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <!-- jQuery Circle-->
        <link rel="stylesheet" href="{{ asset("admin_template/css/grasp_mobile_progress_circle-1.0.0.min.css") }}">
        <!-- Custom Scrollbar-->
        <link rel="stylesheet" href="{{ asset("admin_template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css") }}">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="{{ asset("admin_template/css/style.default.css") }}" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="{{ asset("admin_template/css/custom.css") }}">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
<body>

<!-- Side Navbar -->
@include('admin.layout.left_navbar')

<div class="page home-page">
    <!-- navbar-->
    @include('admin.layout.navbar')

    @yield('content')

    @include('admin.layout.footer')
</div>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="{{ asset("admin_template/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin_template/vendor/jquery.cookie/jquery.cookie.js") }}"> </script>
<script src="{{ asset("admin_template/js/grasp_mobile_progress_circle-1.0.0.min.js") }}"></script>
<script src="{{ asset("admin_template/vendor/jquery-validation/jquery.validate.min.js") }}"></script>
<script src="{{ asset("admin_template/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js") }}"></script>
<script src="{{ asset("admin_template/js/charts-home.js") }}"></script>
<script src="{{ asset("admin_template/js/front.js") }}"></script>
</body>
</html>