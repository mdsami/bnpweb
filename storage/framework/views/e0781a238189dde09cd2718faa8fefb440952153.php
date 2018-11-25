<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<!-- Mirrored from sensitive.adminbsb-themes.com/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 17:40:00 GMT -->
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="icon" href="<?php echo e(asset('resources')); ?>/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/iCheck/skins/square/_all.css" rel="stylesheet"/>
    <link href="<?php echo e(asset('resources')); ?>/assets/css/style.css" rel="stylesheet"/>
    <?php echo $__env->yieldContent('extraCSS'); ?>
</head>
<body>
<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery/dist/jquery.min.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap/dist/js/bootstrap.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/iCheck/icheck.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery-validation/dist/jquery.validate.js"></script>

<?php echo $__env->yieldContent('extraJS'); ?>
</body>

</html>
