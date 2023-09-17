<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Webinar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('lesson.index')); ?>">Webinar</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('webinar.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single Webinar Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="<?php echo e(asset('storage/webinar/'. $webinar->image)); ?>" class="card-img-top" alt="<?php echo e($webinar->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($webinar->name); ?></h5>
                            <p class="card-text"><?php echo e($webinar->description); ?></p>
                            <p class="card-text"><strong>Date:</strong> <?php echo e($webinar->date); ?></p>
                            <p class="card-text"><strong>Time:</strong> <?php echo e($webinar->time); ?></p>
                            <p class="card-text"><strong>Location:</strong> <?php echo e($webinar->location); ?></p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/webinar/webinar-info.blade.php ENDPATH**/ ?>