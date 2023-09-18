<?php $__env->startSection('content'); ?>

<div class="container-fluid w-100 vh-100 mt-0 position-relative background-image">
    <div class="row mt-5 d-flex">
        <div class="col-md-12 mb-5 mt-5 justify-content-center align-items-center">
            <h1 class="text-center text-white text-danger-emphasis position-relative" style="z-index: 2;"><strong>অভিনন্দন</strong>, <span id="userName"><?php echo e(auth()->user()->name); ?></span>!</h1>
        </div>
    </div>
</div>
   


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/dashboard.blade.php ENDPATH**/ ?>