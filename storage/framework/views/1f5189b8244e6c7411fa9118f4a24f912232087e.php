<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-sm-3 control-label"><?php echo e(' Division Name'); ?></label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($division->name) ? $division->name : ''); ?>" required>
        <?php echo $errors->first('name', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
