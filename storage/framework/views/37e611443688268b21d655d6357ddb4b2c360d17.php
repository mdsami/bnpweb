

<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>Thana</h1>
    </div>
    <div class="page-body">

        <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Thana Details &nbsp;&nbsp;
                    </div>
                    <div class="panel-body p-b-25">

                        <dl class="dl-horizontal">
                      <dt>Name</dt>
                      <dd><?php echo e($thana->name); ?></dd> 
                                                 
                        <dt>Address</dt>
                      <dd><?php echo e($thana->address); ?></dd> 
                                                 
                        <dt>Phone no.</dt>
                      <dd><?php echo e($thana->phone); ?></dd> 
                                                 
                        <dt>Longitude</dt>
                      <dd><?php echo e($thana->long); ?></dd> 
                                                 
                        <dt>Latitude</dt>
                      <dd><?php echo e($thana->lat); ?></dd> 
                                                 
                        <dt>OC Name</dt>
                      <dd><?php echo e($thana->oc); ?></dd> 
                                                 
                        <dt>Division</dt>
                      <dd><?php echo e($thana->division->name); ?></dd> 
                                                 
                        <dt>Area</dt>
                      <dd><?php echo e($thana->area->name); ?></dd> 
                                                 
                        <dt>Zone</dt>
                      <dd><?php echo e($thana->zone->name); ?></dd>  
                                                 
                        <dt>District</dt>
                      <dd><?php echo e($thana->district->name); ?></dd> 
                                                 
                  </dl>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>