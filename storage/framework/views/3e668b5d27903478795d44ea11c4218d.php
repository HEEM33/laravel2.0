<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Universities</h1>
    <div class="row">
        <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($university->name); ?></h5>
                        
                        <img src="<?php echo e(asset('uploads/universities/'.$university->image)); ?>" class="card-img-top" alt="University Image" style="height: 215px;">
                        <a href="<?php echo e(route('details', ['universities_id' => $university->id])); ?>" >Voir les détails</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inc.home-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/home.blade.php ENDPATH**/ ?>