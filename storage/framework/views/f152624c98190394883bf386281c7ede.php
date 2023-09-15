<?php $__env->startSection('course_content'); ?>
    <div>
        <div class="container">
            <form action="<?php echo e(route('quiz.answer.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row mb-5">
                    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 mb-2">
                            <h3><?php echo e($quiz->question); ?></h3>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[<?php echo e($quiz->id); ?>]" id="quiz_option_<?php echo e($quiz->id); ?>_1" value="<?php echo e($quiz->option_1); ?>"> <label
                                for="quiz_option_<?php echo e($quiz->id); ?>_1"><?php echo e($quiz->option_1); ?></label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[<?php echo e($quiz->id); ?>]" id="quiz_option_<?php echo e($quiz->id); ?>_2" value="<?php echo e($quiz->option_2); ?>"> <label
                                for="quiz_option_<?php echo e($quiz->id); ?>_2"><?php echo e($quiz->option_2); ?></label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[<?php echo e($quiz->id); ?>]" id="quiz_option_<?php echo e($quiz->id); ?>_3" value="<?php echo e($quiz->option_3); ?>"> <label
                                for="quiz_option_<?php echo e($quiz->id); ?>_3"><?php echo e($quiz->option_3); ?></label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[<?php echo e($quiz->id); ?>]" id="quiz_option_<?php echo e($quiz->id); ?>_4" value="<?php echo e($quiz->option_4); ?>"> <label
                                for="quiz_option_<?php echo e($quiz->id); ?>_4"><?php echo e($quiz->option_4); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


                <button type="submit" class="btn btn-sm btn-success">সংরক্ষন করুন</button>
            </form>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/quiz.blade.php ENDPATH**/ ?>