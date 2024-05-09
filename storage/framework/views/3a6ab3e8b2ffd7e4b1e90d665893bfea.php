

<?php $__env->startSection('title', 'Historique'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Historique des actions</h1>
    <div align="right"><a href="<?php echo e(url('/home')); ?>"  class="btn btn-primary mt-3">Retour</a></div>
    <?php if(count($history) > 0): ?>
        <ul>
            <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($record->action); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>Aucun historique trouvé.</p>
    <?php endif; ?>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/pages/history.blade.php ENDPATH**/ ?>