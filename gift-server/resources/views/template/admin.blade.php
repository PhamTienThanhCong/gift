<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $web_config->web_name }} | {{ $web_config->title }}</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/bower_components/Ionicons/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">

    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('css')

</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        @include('layouts.header-admin')

        @include('layouts.sidebar-admin')

        <div class="content-wrapper">

            <section class="content-header">
                <h1>
                    {{ $web_config->title }}
                </h1>
            </section>

            <section class="content">

                @yield('content')

            </section>

        </div>

        @include('layouts.footer-admin')

    </div>
    <script data-cfasync="false" src="https://adminlte.io/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>

    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.sidebar-menu').tree()
        })
    </script>
    @yield('js')
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 16:29:28 GMT -->

</html>
