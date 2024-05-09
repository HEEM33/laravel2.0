

<?php $__env->startSection('title', 'Universities'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="row">
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="">Edit Universities</h4>
        </div>

        <div class="card-body">

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

            <form action="<?php echo e(url('admin/update-universities/'.$universities->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="">University Name</label>
                    <input type="text" name="name" value="<?php echo e($universities->name); ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">University Description</label>
                    <textarea name="description" rows="5"  class="form-control"><?php echo e($universities->name); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/admin/universities/edit.blade.php ENDPATH**/ ?>