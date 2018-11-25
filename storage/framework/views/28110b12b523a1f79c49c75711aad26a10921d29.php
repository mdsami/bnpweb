<div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
    <label for="phone" class="col-sm-3 control-label"><?php echo e('Phone'); ?></label>
    <div class="col-sm-9">
        <input class="form-control" name="phone" type="text" id="phone" value="<?php echo e(isset($complain->phone) ? $complain->phone : ''); ?>" required>
        <?php echo $errors->first('phone', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('complain') ? 'has-error' : ''); ?>">
    <label for="complain" class="col-sm-3 control-label"><?php echo e('Complain'); ?></label>
    <div class="col-sm-9">
        <textarea class="form-control" rows="4" name="message" id="message" value="<?php echo e(isset($complain->message) ? $complain->message : ''); ?>"><?php echo e(isset($complain->message) ? $complain->message : ''); ?></textarea>
        <?php echo $errors->first('complain', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('thana_id') ? 'has-error' : ''); ?>">
    <label for="thana" class="col-sm-3 control-label"><?php echo e('thana'); ?></label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a thana" name="thana_id" id="thana">
            <?php $__currentLoopData = $thana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php echo $errors->first('thana_id', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('fari_id') ? 'has-error' : ''); ?>">
    <label for="Fari" class="col-sm-3 control-label"><?php echo e('Fari'); ?></label>
    <div class="col-sm-9">
        <select class="form-control selectpicker show-tick" data-live-search="true" title="please select a fari" name="fari_id" id="fari">
            <?php $__currentLoopData = $fari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php echo $errors->first('fari_id', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('img') ? 'has-error' : ''); ?>">
    <label for="img" class="col-sm-3 control-label"><?php echo e('Image'); ?></label>
    <div class="col-sm-9">
        <input type="file" id="img" name="img">
        <?php echo $errors->first('img', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('audio') ? 'has-error' : ''); ?>">
    <label for="audio" class="col-sm-3 control-label"><?php echo e('Audio'); ?></label>
    <div class="col-sm-9">
        <input type="file" id="audio" name="audio">
        <?php echo $errors->first('audio', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group <?php echo e($errors->has('video') ? 'has-error' : ''); ?>">
    <label for="video" class="col-sm-3 control-label"><?php echo e('Video'); ?></label>
    <div class="col-sm-9">
        <input type="file" id="video" name="video">
        <?php echo $errors->first('video', '<p class="error help-block">:message</p>'); ?>

    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary btn-block" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
