<?php $__env->startSection('page_content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mt-5">
                <h2 class="mb-4">দুঃখিত আপনি ইতোমধ্যেই এই কুইজে অংশগ্রহণ করেছেন ।</h2>
                <a href="<?php echo e(route('courses')); ?>" class="btn btn-success ">কোর্সে ফিরে যান</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/return_course.blade.php ENDPATH**/ ?>