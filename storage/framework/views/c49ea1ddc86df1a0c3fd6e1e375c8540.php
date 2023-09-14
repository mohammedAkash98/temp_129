<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Lesson</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('lesson.index')); ?>">Lesson</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container mt-5">
        <a href="<?php echo e(route('lesson.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single Lesson Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="<?php echo e(asset('storage/lesson/'. $lesson->image)); ?>" class="card-img-top" alt="<?php echo e($lesson->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($lesson->name); ?></h5>
                            <p class="card-text"><?php echo e($lesson->description); ?></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/lesson/lesson-info.blade.php ENDPATH**/ ?>