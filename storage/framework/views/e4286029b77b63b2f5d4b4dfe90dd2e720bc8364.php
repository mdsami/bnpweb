<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="col-sm-3 control-label"><?php echo e(' Name'); ?></label>
    <div class="col-sm-9">
        <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($district->name) ? $district->name : ''); ?>" required>
        <?php echo $errors->first('name', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
    <label for="address" class="col-sm-3 control-label"><?php echo e('Address'); ?></label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="address" id="address" value="<?php echo e(isset($district->address) ? $district->address : ''); ?>"><?php echo e(isset($district->address) ? $district->address : ''); ?></textarea>
        <?php echo $errors->first('address', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('division_id') ? 'has-error' : ''); ?>">
    <label for="phone" class="col-sm-3 control-label"><?php echo e('Division'); ?></label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a Division" name="division_id" id="division" required>
            <?php $__currentLoopData = $division; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php echo $errors->first('division', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('area_id') ? 'has-error' : ''); ?>">
    <label for="phone" class="col-sm-3 control-label"><?php echo e('Area'); ?></label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a area" name="area_id" id="area" required>
            <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php echo $errors->first('area', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('zone_id') ? 'has-error' : ''); ?>">
    <label for="phone" class="col-sm-3 control-label"><?php echo e('Zone'); ?></label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a zone" name="zone_id" id="zone" required>
            <?php $__currentLoopData = $zone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php echo $errors->first('zone', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
