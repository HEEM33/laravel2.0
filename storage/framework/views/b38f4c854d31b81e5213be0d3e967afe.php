

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement des universités</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>Classement des universités</h1>
        <div align="right"><a href="<?php echo e(url('/home')); ?>"  class="btn btn-primary mt-3">Retour</a></div>
        <div class="rankings">
            <?php $__currentLoopData = $rankings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ranking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="ranking-item">
                    <h3><?php echo e($ranking->name); ?></h3>
                    <p> Moyenne : <?php echo e($ranking->ratings_avg_rating); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html>


<script>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
}

.rankings {
    margin-top: 20px;
}

.ranking-item {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px;
}

.ranking-item h3 {
    margin-top: 0;
}

.ranking-item p {
    margin-bottom: 0;
}

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\emile\myapp\resources\views/pages/classement.blade.php ENDPATH**/ ?>