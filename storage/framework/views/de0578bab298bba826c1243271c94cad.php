

<?php $__env->startSection('title', 'Liste des Commentaires'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div align="right"><a href="<?php echo e(url('admin/dashboard/')); ?>"  class="btn btn-primary mt-3">Retour</a></div>
    <h1>Liste des Commentaires</h1>
    <div class="row">
        <div class="col-md-8">
            <?php if(count($comments) > 0): ?>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mt-3">
                        <div class="card-body">
                        <?php if($comment->user): ?>
                            <h5 class="card-title"><?php echo e($comment->user->name); ?></h5>
                        <?php else: ?>
                            <h5 class="card-title">Utilisateur inconnu</h5>
                        <?php endif; ?>

                            <p class="card-text"><?php echo e($comment->comment); ?></p>
                            <p><small>Posté le <?php echo e($comment->created_at->format('d/m/Y H:i')); ?></small></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo e(url('admin/delete-comments/'.$comment->id)); ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <p>Aucun commentaire disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/admin/comments/index.blade.php ENDPATH**/ ?>