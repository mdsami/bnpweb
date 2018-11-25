

<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h1>Create New Complain</h1>
</div>
<div class="page-body">

    <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Complain</div>
                <div class="panel-body p-b-25">
                    <form method="POST" action="<?php echo e(route('complain.store')); ?>" accept-charset="UTF-8"
                    class="form-horizontal" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <?php echo $__env->make('/page/.complain.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </form>
            </div>
        </div>
    </div>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extraJS'); ?>
<script>
    $(document).on('change', '#thana', function () {
        $('#fari').empty().selectpicker('refresh');
    });
    $(document).on('change', '#fari', function () {
        $('#thana').empty().selectpicker('refresh');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>