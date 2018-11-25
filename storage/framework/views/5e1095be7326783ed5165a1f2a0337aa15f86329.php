<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>DASHBOARD</h1>
    </div>
    <div class="page-body">

        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">supervisor_account</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL COMPLAINT</div>
                        <div class="number"><?php echo e(($total['complain'])? $total['complain']:0); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL DISTRICT</div>
                        <div class="number"><?php echo e(($total['district'])? $total['district']:0); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL THANA</div>
                        <div class="number"><?php echo e(($total['thana'])? $total['thana']:0); ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box infobox-type-5 hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL FARI</div>
                        <div class="number"><?php echo e(($total['fari'])? $total['fari']:0); ?></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Complain List</div>
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
                                                <img src="<?php echo e(asset('storage/'.$item->img)); ?>" alt="" height=30 width=30 />
                                            </a>
                                            <!-- <a href="<?php echo e(asset('uploads/'.$item->img)); ?>" data-fancybox="images" data-caption="<?php echo e($item->message); ?>">
                                                <img src="<?php echo e(asset('uploads/'.$item->img)); ?>" alt="" height=30 width=30 />
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
                                                
                                                    Your browser doesn't support HTML5 video tag.
                                                </video>
                                                <?php endif; ?>
                                            </td>
                                     </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

    <script src="<?php echo e(asset('resources')); ?>/assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo e(asset('resources')); ?>/assets/plugins/flot-spline/js/jquery.flot.spline.js"></script>
    <script src="<?php echo e(asset('resources')); ?>/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo e(asset('resources')); ?>/assets/plugins/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo e(asset('resources')); ?>/assets/plugins/flot/jquery.flot.time.js"></script>

    <script>

        $( document ).ready(function() {

            $('[data-sparkline="true"]').each(function(i,key){var type=$(key).data('type');var height=$(key).data('height');var barColor=$(key).data('barColor');height=height===undefined?24:height;barColor=barColor===undefined?'#d2d2d2':barColor;$(key).sparkline('html',{type:type,barColor:barColor,height:height,chartRangeMin:0});});var flotChartDatas=[[[0,21],[1,12],[2,27],[3,12],[4,16],[5,20],[6,15],[7,12],[8,35],[9,20],[10,10],[11,18],[12,12]],[[0,3],[1,9],[2,15],[3,9],[4,16],[5,8],[6,15],[7,12],[8,19],[9,14],[10,10],[11,16],[12,10]]];var flotChartOptions={series:{lines:{show:false,fill:true},points:{show:false,radius:5,width:5},splines:{show:true,tension:0.4,lineWidth:1,fill:0.3},shadowSize:0},grid:{hoverable:true,clickable:true,tickColor:'#f0f0f0',borderWidth:1,color:'#f0f0f0'},colors:['#d0d0d0','#1ab394'],yaxis:{ticks:4}}
            setTimeout(initFlotChart,550);function initFlotChart(){$.plot('#line_chart',flotChartDatas,flotChartOptions);}
        });




    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>