<?php
$numto = new Rakibhstu\Banglanumber\NumberToBangla();
$sl = 1;
?>



<?php $__env->startSection('page_content'); ?>
    <?php
        $current_chapter_id = auth()->user()->overview->current_chapter_id;
    ?>

    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="box col-md-3">
                        <h1 class="box-title<?php echo e($key++); ?>" style="font-size:50px"><?php echo e($numto->bnNum($sl++)?? ''); ?>

                        </h1>
                        <p class="box-text<?php echo e($key++); ?>"><?php echo e($course->name ?? ''); ?></p>
                        <?php if($key - 1 <= $current_chapter_id): ?>
                            <a href="<?php echo e(route('courses.show', $course->id)); ?>">
                                <button
                                    class="bg-success text-dark border border-success rounded-pill p-2 btn"><b>সম্পন্ন</b></button>
                            </a>
                        <?php else: ?>
                            <a href="<?php echo e(route('courses.show', $course->id)); ?>">
                                <button class="text-dark border border-warning rounded-pill p-2 btn"><b>সম্পন্ন <i
                                            class="lni lni-lock-alt h6"></i> </b></button>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>


    </div>

    <style>

    </style>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\epushtiN\temp_129\resources\views/frontend/courses__lessons/course_chapter.blade.php ENDPATH**/ ?>