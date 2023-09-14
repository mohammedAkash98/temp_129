<?php $__env->startSection('course_content'); ?>
<img width="100" src="<?php echo e(asset('storage/lesson/'. $lesson->image)); ?>" alt="">
<h1><?php echo e($lesson->name); ?></h1>
<p><?php echo $lesson->description; ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/frontend/courses__lessons/course_view.blade.php ENDPATH**/ ?>