<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Seminar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('seminar.index')); ?>">Seminar</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('seminar.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single seminar Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="<?php echo e(asset('storage/seminar/'. $seminar->image)); ?>" class="card-img-top" alt="<?php echo e($seminar->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($seminar->name); ?></h5>
                            <p class="card-text"><?php echo $seminar->description; ?></p>
                            <p class="card-text"><strong>Date:</strong> <?php echo e($seminar->date); ?></p>
                            <p class="card-text"><strong>Time:</strong> <?php echo e($seminar->time); ?></p>
                            <p class="card-text"><strong>Location:</strong> <?php echo e($seminar->location); ?></p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/seminar/seminar-info.blade.php ENDPATH**/ ?>