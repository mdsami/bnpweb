
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from sensitive.adminbsb-themes.com/pages/examples/403.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 17:40:06 GMT -->
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Welcome To | {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{asset('resources')}}/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{asset('resources')}}/assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />

    <link href="{{asset('resources')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <link href="{{asset('resources')}}/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="error-box">
                <h1>403</h1>
                <h3>Forbidden: Access Is Denied</h3>
                <div class="info">
                    You don't have permission to view this directory or page
                </div>
                <hr>
                <a href="{{route('login')}}" class="btn btn-lg btn-success">Login</a>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

<script src="{{asset('resources')}}/assets/plugins/jquery/dist/jquery.min.js"></script>

<script src="{{asset('resources')}}/assets/plugins/bootstrap/dist/js/bootstrap.js"></script>
</body>

<!-- Mirrored from sensitive.adminbsb-themes.com/pages/examples/403.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 17:40:06 GMT -->
</html>