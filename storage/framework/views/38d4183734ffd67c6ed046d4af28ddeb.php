<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Activity Sheet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('activity_sheet.index')); ?>">Activity Sheet</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('activity_sheet.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single activity_sheet Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <embed src="<?php echo e(asset('storage/activity_sheet/'. $activity_sheet->pdf)); ?>" class="vh-100" type="application/pdf">
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/activity_sheet/activity_sheet-info.blade.php ENDPATH**/ ?>