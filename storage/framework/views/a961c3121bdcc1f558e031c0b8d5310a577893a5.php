<?php if($errors->any()): ?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="text-center alert" style="margin-bottom:0px !important;">

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <i class="fa fa-fw fa-times-circle"></i>
                <strong><?php echo e($error); ?></strong>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php 
session(['errors' => '']);
?>
<?php else: ?>

<div class="row">
    <?php if(session('success')): ?>
    <div class="col-md-10 col-md-offset-1">
        <div class="alert alert-success text-center" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-fw fa-check-circle"></i>
            <strong><?php echo e(session('success')); ?></strong>
        </div>
    </div>
    <?php 
    session(['success' => '']);
    ?>
    <?php endif; ?>
</div>
<?php endif; ?>