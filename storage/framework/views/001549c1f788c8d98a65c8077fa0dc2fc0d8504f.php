
<?php $__env->startSection('title','Forgot Password'); ?>
<?php $__env->startSection('content'); ?>
    <div class="fp-page">
        <div class="fp-form-area">
            <h1><b><?php echo e(config('app.name', 'Laravel')); ?></b></h1>
            <div class="fp-top-info">Enter your email address that you used to register. We'll send you an email with
                your
                username and a link to reset your password.
            </div>
            <div class="row padding-15">
                <div class="col-sm-2 col-md-2 col-lg-4"></div>
                <div class="col-sm-8 col-md-8 col-lg-4">
                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-block btn-flat">Reset My Password</button>

                    </form>
                    <br/>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extraCSS'); ?>
    <style>
        .fp-page .fp-form-area {
            width: 100%;
            padding-left: 15%;
            padding-right: 15%;
        }

        .fp-page .fp-form-area .form-bottom-info a {
            color: #555 !important;
            font-size: 13px;
            text-decoration: none;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extraJS'); ?>
    <script src="<?php echo e(asset('resources')); ?>/assets/js/pages/examples/forgot-password.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>