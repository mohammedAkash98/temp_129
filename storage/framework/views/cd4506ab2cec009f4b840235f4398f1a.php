<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>SVCC</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('svcc.index')); ?>">SVCC</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('svcc.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single svcc Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img  src="<?php echo e(asset('storage/svcc/'. $svcc->image)); ?>" class="card-img-top w-100" alt="<?php echo e($svcc->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($svcc->name); ?></h5>
                        </div>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/svcc/svcc-info.blade.php ENDPATH**/ ?>