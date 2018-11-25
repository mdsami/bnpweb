<?php $__env->startSection('extraCSS'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-heading">
  <h1>Complain</h1>
</div>
<div class="page-body">

  <div class="row clearfix">

    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
      <div class="panel panel-default">

        <div class="panel-heading">complain &nbsp;&nbsp;
        </div>
        <div class="panel-body p-b-25">

          <dl class="dl-horizontal">
            <dt>Phone</dt>
            <dd><?php echo e($complain->phone); ?></dd><br/> 

            <dt>Address</dt>
            <dd><?php echo e($complain->message); ?></dd><br/> 


            <dt>Thana</dt>
            <dd><?php echo e(isset($complain->thana->name) ? $complain->thana->name : ""); ?></dd><br/> 

            <dt>Fari</dt>
            <dd><?php echo e(isset($complain->fari->name) ? $complain->fari->name : ""); ?></dd><br/> 

            <dt>Image</dt>
            <dd>
              <?php if($complain->img): ?>
              <a href="<?php echo e(asset('storage/'.$complain->img)); ?>" data-fancybox="images" data-caption="<?php echo e($complain->message); ?>">
                  <i class="fa fa-2x fa-image"></i>
                <img src="<?php echo e(asset('storage/'.$complain->img)); ?>" alt="" height=30 width=30 />
              </a>
              <!-- <a href="<?php echo e(asset('uploads/'.$complain->img)); ?>" data-fancybox="images" data-caption="<?php echo e($complain->message); ?>">
                <img src="<?php echo e(asset('uploads/'.$complain->img)); ?>" alt="" height=30 width=30 />
              </a> -->
              <?php endif; ?>
            </dd><br/> 

            <dt>Audio</dt>
            <dd>
              <?php if($complain->audio): ?>
              <a data-fancybox href="#myAudio">
                <i class="fa fa-2x fa-volume-up"></i>
              </a>
              <audio width="640" height="40" controls id="myAudio" style="display:none;">
                <source src="<?php echo e(asset('storage/'.$complain->audio)); ?>" type="audio/mpeg">
                <!-- <source src="<?php echo e(asset('uploads/'.$complain->audio)); ?>" type="audio/mpeg"> -->
                  Your browser doesn't support HTML5 audio tag.
                </audio>
                <?php endif; ?>
              </dd><br/> 

              <dt>Video</dt>
              <dd>
                <?php if($complain->video): ?>
                <a data-fancybox href="#myVideo">
                  <i class="fa fa-2x fa-video"></i>
                </a>
                <video controls id="myVideo" style="display:none;">
                  <source src="<?php echo e(asset('storage/'.$complain->video)); ?>" type="video/mp4">
                  <!-- <source src="<?php echo e(asset('uploads/'.$complain->video)); ?>" type="video/mp4"> -->
                    Your browser doesn't support HTML5 video tag.
                  </video>
                  <?php endif; ?>
                </dd><br/> 

              </dl>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $__env->stopSection(); ?>   
    
    <?php $__env->startSection('extraJS'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>