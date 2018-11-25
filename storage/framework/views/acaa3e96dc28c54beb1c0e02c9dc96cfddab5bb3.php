<?php $__env->startSection('extraCSS'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h1>Complain</h1>
</div>
<div class="page-body">

 <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Complain Location</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 modal_body_content">
               <div id="map-canvas"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 modal_body_map">
              <div class="location-map" id="location-map">              
                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="modal-footer">
              <button type="button" class="btn btn-link" data-dismiss="modal">CLOSE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    

 <!-- Modal -->

    <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row clearfix">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complain &nbsp;&nbsp;
                    <a href="<?php echo e(route('complain.create')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"
                            aria-hidden="true"></i>&nbsp; Add New Complain</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover js-exportable dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Phone</th>
                                    <th>Complain</th>
                                    <th>Thana</th>
                                    <th>Fari</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $complain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td><?php echo e($item->message); ?></td>
                                    <td><?php echo e(isset($item->thana->name) ? $item->thana->name : ""); ?></td>
                                    <td><?php echo e(isset($item->fari->name) ? $item->fari->name : ""); ?></td>
                                    <td>
                                        <?php if($item->img): ?>
                                        <a href="<?php echo e(asset('storage/'.$item->img)); ?>" data-fancybox="images" data-caption="<?php echo e($item->message); ?>">
                                            <i class="fa fa-2x fa-image"></i>
                                            <img src="<?php echo e(asset('storage/'.$item->img)); ?>" alt="" height=30 width=30 />
                                        </a>
                                        <!-- <a href="<?php echo e(asset('storage/'.$item->img)); ?>" data-fancybox="images" data-caption="<?php echo e($item->message); ?>">
                                                <img src="<?php echo e(asset('storage/'.$item->img)); ?>" alt="" height=30 width=30 />
                                            </a> -->
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->audio): ?>
                                        <a data-fancybox href="#myAudio">
                                            <i class="fa fa-2x fa-volume-up"></i>
                                        </a>
                                        <audio width="640" height="40" controls id="myAudio" style="display:none;">
                                            <source src="<?php echo e(asset('storage/'.$item->audio)); ?>" type="audio/wav">
                                            <!-- <source src="<?php echo e(asset('storage/'.$item->audio)); ?>" type="audio/mpeg"> -->
                                            Your browser doesn't support HTML5 audio tag.
                                        </audio>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($item->video): ?>
                                        <a data-fancybox href="#myVideo">
                                            <i class="fa fa-2x fa-video"></i>
                                        </a>
                                        <video controls id="myVideo" style="display:none;">
                                            <source src="<?php echo e(asset('storage/'.$item->video)); ?>" type="video/mp4">
                                            <!-- <source src="<?php echo e(asset('storage/'.$item->video)); ?>" type="video/mp4"> -->
                                            Your browser doesn't support HTML5 video tag.
                                        </video>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('complain.show',$item->id)); ?>" title="View complain" class="btn btn-outline btn-success"><i
                                                class="fa fa-check" aria-hidden="true"></i> View</a>
                                        <a href="<?php echo e(route('complain.edit',$item->id)); ?>" title="Edit complain" class="btn btn-outline btn-primary"><i
                                                class="fa fa-edit"></i> Edit</a>

                                        <form method="POST" action="<?php echo e(route('complain.destroy',$item->id)); ?>"
                                            accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                            <?php echo e(csrf_field()); ?>

                                            <button type="submit" class="btn btn-outline btn-danger" title="Delete complain"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i> Delete
                                            </button>
                                            <button type="button" class="btn btn-outline btn-primary showMap" data-lat= "<?php echo e($item->lat); ?>"  data-long= "<?php echo e($item->long); ?>" >
                                                <i class="fa fa-map" aria-hidden="true"></i> ViewonMap
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>complain Name</th>
                                    <th>OC Name</th>
                                    <th>OC Phone</th>
                                    <th>complain Address</th>
                                    <th>Image</th>
                                    <th>Audio</th>
                                    <th>Video</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extraJS'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_fn1Qc5ZwWLgZreki8qm1kv3qRyekhTg" async defer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    	var lat = "";
    	var lng = "";
        $(document).on("click",".showMap", function(){
        	$("#myModal").modal("show");
        	lat = $(this).data("lat");
        	lng = $(this).data("long");
        })
    
        $("#myModal").on('shown.bs.modal', function () {
                        
               	var myLatlng = new google.maps.LatLng( lat, lng );
		var mapOptions = {
		  zoom: 13,
		  center: myLatlng
		}
		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		
		var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Hello World!"
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);
		            

    	});
   
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>