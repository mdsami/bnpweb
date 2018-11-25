

<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>Create New District</h1>
    </div>
    <div class="page-body">

        <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New District</div>
                    <div class="panel-body p-b-25">
                        <form method="POST" action="<?php echo e(route('district.store')); ?>" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <?php echo $__env->make('/page/.district.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extraJS'); ?>
<script>
    $(document).on('change', '#division', function () {
        var division = $(this).val();
        var url="<?php echo e(url('division')); ?>"+"/"+division+"/area";
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function (data) {
                var areas=data;
                $('#area').empty().selectpicker('refresh');
                $('#zone').empty().selectpicker('refresh');
                $('#zone').html('').selectpicker('refresh');
                $.each(areas, function (i, area) {
                    $('#area').append('<option value="'+area.id+'">'+area.name+'</option>').selectpicker('refresh');
                });
            }
        });

    });
    $(document).on('change', '#area', function () {
        var area = $(this).val();
        var url="<?php echo e(url('area')); ?>"+"/"+area+"/zone";
        $.ajax({
            type: "GET",
            url: url,
            dataType: 'json',
            success: function (data) {
                var zones=data;
                $('#zone').empty().selectpicker('refresh');
                $.each(zones, function (i, zone) {
                    $('#zone').append('<option value="'+zone.id+'">'+zone.name+'</option>').selectpicker('refresh');
                });
            }
        });

    });

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>