<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e((Request::segment(1)) ? ucfirst(Request::segment(1)) : 'Root'); ?> <?php echo e((env('APP_NAME')) ? env('APP_NAME') : ' | Laravel'); ?></title>

    <link rel="icon" href="<?php echo e(asset('resources')); ?>/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap/dist/css/bootstrap.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/animate-css/animate.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/iCheck/skins/flat/_all.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/switchery/dist/switchery.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/metisMenu/dist/metisMenu.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/media/css/dataTables.bootstrap.css"
          rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/pace/themes/white/pace-theme-flash.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/css/style.css" rel="stylesheet"/>

    <link href="<?php echo e(asset('resources')); ?>/assets/css/themes/allthemes.css" rel="stylesheet"/>
    <link href="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" />

    <?php echo $__env->yieldContent('extraCSS'); ?>

</head>
<body>
<div class="all-content-wrapper">

    <header>
        <?php echo $__env->make('include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>


    <aside class="sidebar">
        <?php echo $__env->make('include.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </aside>


    <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </section>

    <footer style="position: fixed; bottom: 1px; width: 100%;">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-sm-6">
                    Copyright &copy; 2017, <b><?php echo e(config('app.name', 'Laravel')); ?></b>
                </div>
                <div class="col-sm-6 align-right">
                    Hand-crafted & Made with love :)
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery/dist/jquery.min.js"></script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery-ui/jquery-ui.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/pace/pace.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/screenfull/src/screenfull.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/metisMenu/dist/metisMenu.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/switchery/dist/switchery.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/iCheck/icheck.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>


<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/buttons.bootstrap.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/jszip.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/DataTables/extensions/export/buttons.print.min.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/peity/jquery.peity.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/js/admin.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/js/pages/dashboard/dashboard.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/plugins/bootstrap-select/dist/js/bootstrap-select.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/js/pages/forms/basic-form-elements.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/js/custom.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/plugins/gmaps/gmaps.js"></script>

<script src="<?php echo e(asset('resources')); ?>/assets/js/pages/maps/google-maps.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/js/admin.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/js/pages/ui/modals.js"></script>
<script src="<?php echo e(asset('resources')); ?>/assets/map-script.js"></script>
<script src="//maps.googleapis.com/maps/api/js"></script>

<?php echo $__env->yieldContent('extraJS'); ?>

</body>
</html>