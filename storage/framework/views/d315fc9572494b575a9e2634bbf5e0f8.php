<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Activity Sheet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('activity_sheet.index')); ?>">Activity Sheet</a></li>
                <li class="breadcrumb-item active">Edit Activity Sheet</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->


    <div class="container">
        <h2>Edit Activity Sheet</h2>
        <form action="<?php echo e(route('activity_sheet.update', $activity_sheet->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row g-4">
                <div class="col-md-12">
                    <label for="name">Title:</label>
                    <input type="text" value="<?php echo e($activity_sheet->name); ?>" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-12">
                    <label for="pdf">PDF:</label>
                    <input type="file" class="form-control" id="pdf" name="pdf">
                </div>

            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i>
                Save</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/activity_sheet/activity_sheet-edit.blade.php ENDPATH**/ ?>