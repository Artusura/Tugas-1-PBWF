<?php $__env->startSection('title',"Data Pelanggan"); ?>
<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <li>PHP</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($index+1); ?> | <?php echo e($val); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/highsierra/Documents/tugas/view-app/resources/views/pelanggan/index.blade.php ENDPATH**/ ?>