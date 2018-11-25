<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from sensitive.adminbsb-themes.com/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 17:40:00 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{asset('resources')}}/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>

    <link href="{{asset('resources')}}/assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet"/>

    <link href="{{asset('resources')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

    <link href="{{asset('resources')}}/assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet"/>
    <link href="{{asset('resources')}}/assets/css/style.css" rel="stylesheet"/>
    @yield('extraCSS')
</head>
<body>
@yield('content')

<script src="{{asset('resources')}}/assets/plugins/jquery/dist/jquery.min.js"></script>

<script src="{{asset('resources')}}/assets/plugins/bootstrap/dist/js/bootstrap.js"></script>

<script src="{{asset('resources')}}/assets/plugins/iCheck/icheck.js"></script>

<script src="{{asset('resources')}}/assets/plugins/jquery-validation/dist/jquery.validate.js"></script>

@yield('extraJS')
</body>

</html>
