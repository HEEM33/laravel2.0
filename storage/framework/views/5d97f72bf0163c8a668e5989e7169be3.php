

<?php $__env->startSection('title', 'Universities'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>view universities <a href="<?php echo e(url('admin/add-universities')); ?>" class="btn btn-primary btn-sm float-end">Add</a>
            </h4>
        </div>
        <div class="card-body">
            <?php if(session('message')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('message')); ?>

            </div>
             <?php endif; ?>
             <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>University name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>
                            <img src="<?php echo e(asset('uploads/universities/'.$item->image)); ?>" width="50px" height="50px" alt="img">
                        </td>
                        <td>
                            <a href="<?php echo e(url('admin/edit-universities/'.$item->id)); ?>" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="<?php echo e(url('admin/delete-universities/'.$item->id)); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
             </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/admin/universities/index.blade.php ENDPATH**/ ?>