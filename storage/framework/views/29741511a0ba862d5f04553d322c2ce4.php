<?php $__env->startSection('course_content'); ?>
<div>
    <img class="w-100 mb-2" src="<?php echo e(asset('storage/lesson/'. $lesson->image)); ?>" alt="">
<h1><?php echo e($lesson->name); ?></h1>
</div>
<p><?php echo $lesson->description; ?></p>
<div style="text-align: right;">
    <a href="<?php echo e(route('quiz.view',['chapter_id' => $lesson->chapter->id, 'lesson_id'=>$lesson->id])); ?>" class="btn btn-success btn-sm">নিজেকে যাচাই করুন</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/course_view.blade.php ENDPATH**/ ?>