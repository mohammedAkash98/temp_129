<?php $__env->startSection('content'); ?>
    <div class="container-fluid w-100 vh-100 mt-0 position-relative background-image">
        <div class="row mt-5 d-flex">
            <div class="col-md-12 mb-5 mt-5 justify-content-center align-items-center">
                <h1 class="text-center text-white text-danger-emphasis position-relative" style="z-index: 2;">
                    <strong>অভিনন্দন</strong>, <span id="userName"><?php echo e(auth()->user()->name); ?></span>!</h1>
            </div>
            <div class="col-md-8 mx-auto text-center mt-2">
                <h2 class="text-white mb-3">ই-পুষ্টি প্লাটফর্মে আপনাকে স্বাগতম</h2>
                <p class="text-white">পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা বিষয়ে কিশোরকিশোরী ও তরুণদের সচেতনতা, জ্ঞান, দক্ষতা এবং নেতৃত্ব সৃষ্টির জন্য তথ্য-প্রযুক্তি ভিত্তিক একটি উদ্যোগ হল ই-পুষ্টি।</p>
                <a href="<?php echo e(route('courses')); ?>" class="btn btn-light mt-2">আমাদের কোর্সসমূহ</a>
            </div>

        </div>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/dashboard.blade.php ENDPATH**/ ?>