<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Other</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('other.index')); ?>">Other</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('other.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single other Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card p-4">
                        <img class="w-100 mb-2" src="<?php echo e(asset('storage/other/' . $other->image)); ?>" alt="<?php echo e($other->name); ?>">
                        <h5 class="card-title"><?php echo e($other->name); ?></h5>
                        <p class="card-text"><?php echo $other->description; ?></p>
                        <p class="card-text"><strong>URL:</strong> <a href="<?php echo e($other->url); ?>"><?php echo e($other->url); ?></a></p>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/other/other-info.blade.php ENDPATH**/ ?>