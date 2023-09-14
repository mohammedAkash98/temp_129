<?php $__env->startSection('page_content'); ?>
    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
<?php
    $sl = 1;
?>

               <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="box col-md-3">
                <h2 class="box-title<?php echo e($sl++); ?>"><?php echo e($course->chapter_no_bangla ?? ''); ?></h2>
                <p class="box-text<?php echo e($sl++); ?>"><?php echo e($course->name ?? ''); ?></p>
                <a href="<?php echo e(route('courses.show', $course->id)); ?>">
                    <button> সম্পন্ন</button>
                </a>
            </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/frontend/courses__lessons/course_chapter.blade.php ENDPATH**/ ?>