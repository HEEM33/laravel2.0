<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">  

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">

    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            padding: 0px !important;
            margin: 0px !important;
        }
        div.dataTables_wrapper div.dataTables_length select{
            width: 50% !important;
        }
    </style>

</head>
<body>

    <?php echo $__env->make('layouts.inc.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="layoutSidenav">
        <?php echo $__env->make('layouts.inc.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="layoutSidenav_content">
            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>
            <?php echo $__env->make('layouts.inc.admin-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>" ></script>   
<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>" ></script>
<script src="<?php echo e(asset('assets/js/scripts.js')); ?>" ></script>
<!-- Scripts -->

<!-- DataTables JavaScript -->
<script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function() {
        let table = $('#myDataTable').DataTable();
    });
</script>

</body>
</html>
<?php /**PATH C:\Users\emile\myapp\resources\views/layouts/master.blade.php ENDPATH**/ ?>