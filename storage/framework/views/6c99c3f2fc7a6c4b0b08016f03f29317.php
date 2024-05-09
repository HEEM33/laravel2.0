

<?php $__env->startSection('title', 'Mettre à Jour les Informations'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Actualiser vos Informations</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="'/edit-users/{user_id}'" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e(Auth::user()->name); ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(Auth::user()->email); ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Nouveau Mot de Passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmer le Nouveau Mot de Passe</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Mettre à Jour</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/pages/profil.blade.php ENDPATH**/ ?>