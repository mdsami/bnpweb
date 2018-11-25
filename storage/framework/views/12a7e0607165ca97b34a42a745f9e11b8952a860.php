

<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>District</h1>
    </div>
    <div class="page-body">

        <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">District &nbsp;&nbsp;
                        <a href="<?php echo e(route('district.create')); ?>" class="btn btn-primary btn-sm"><i
                                    class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New District</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover js-exportable dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>District</th>
                                    <th>Address</th>
                                    <th>Division</th>
                                    <th>Area</th>
                                    <th>Zone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td><?php echo e($item->zone->area->division->name); ?></td>
                                        <td><?php echo e($item->zone->area->name); ?></td>
                                        <td><?php echo e($item->zone->name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('district.show', $item->id)); ?>"
                                               title="View District" class="btn btn-outline btn-success"><i
                                                        class="fa fa-check" aria-hidden="true"></i> View</a>
                                            <a href="<?php echo e(route('district.edit', $item->id)); ?>"
                                               title="Edit district" class="btn btn-outline btn-primary"><i
                                                        class="fa fa-edit"></i> Edit</a>

                                            <form method="POST"
                                                  action="<?php echo e(route('district.destroy', $item->id)); ?>"
                                                  accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-outline btn-danger"
                                                        title="Delete district"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>district</th>
                                    <th>Address</th>
                                    <th>Division</th>
                                    <th>Area</th>
                                    <th>Zone</th>
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



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>