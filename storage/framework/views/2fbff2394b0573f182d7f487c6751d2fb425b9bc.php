<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
        <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <ul>
        <?php $__env->startSection('sidebar'); ?>
            <li>Laminating</li>
            <li>Bordir & Socklinear</li>
            <li>Data PO</li>
            <li>SPK</li>
            <li>Grafik Borsoc</li>
        <?php echo $__env->yieldSection(); ?>
    </ul>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer>
        <h3><?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></h3>
    </footer>
</body>
</html><?php /**PATH /Users/highsierra/Documents/tugas/view-app/resources/views/layout/layout.blade.php ENDPATH**/ ?>