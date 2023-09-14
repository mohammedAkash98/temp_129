<?php $__env->startSection('content'); ?>
Dashboard
<h3>Hello, <?php echo e(auth()->user()->name ?? ''); ?></h3>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>