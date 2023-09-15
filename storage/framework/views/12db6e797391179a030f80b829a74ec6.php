<?php $__env->startSection('page_content'); ?>
<?php
    $current_chapter_id = auth()->user()->overview->current_chapter_id;
?>

    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
               <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="box col-md-3">
                <h1 class="box-title<?php echo e($key++); ?>" style="font-size:50px"><?php echo e($course->chapter_no_bangla ?? ''); ?></h1>
                <p class="box-text<?php echo e($key++); ?>"><?php echo e($course->name ?? ''); ?></p>
                <?php if(($key - 1) <= $current_chapter_id): ?>
                    <a href="<?php echo e(route('courses.show', $course->id)); ?>">
                        <button class="bg-success text-black border border-success rounded-pill p-2 btn"><b>সম্পন্ন</b></button>
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('courses.show', $course->id)); ?>">
                        <button class="text-black border border-warning rounded-pill p-2 btn"><b>সম্পন্ন <i class="lni lni-lock-alt h6"></i> </b></button>
                    </a>
                <?php endif; ?>
            </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/course_chapter.blade.php ENDPATH**/ ?>