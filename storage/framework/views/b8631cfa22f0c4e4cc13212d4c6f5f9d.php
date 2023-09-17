<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>Activity Sheet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('activity_sheet.index')); ?>">Activity Sheet</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <?php if($activity_sheets->count() == 0): ?>
        <div class="container mt-5 text-center">
            <h4>There is no activity sheet added yet.</h4>
            <a href="<?php echo e(route('activity_sheet.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Activity Sheet</a>

        </div>
    <?php else: ?>
        <div class="container">
            <a href="<?php echo e(route('activity_sheet.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Activity Sheet</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>PDF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $activity_sheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $activity_sheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($activity_sheet->name ?? ''); ?></td>
                            <td><a href="<?php echo e(route('activity_sheet.info', $activity_sheet->id)); ?>"><?php echo e($activity_sheet->pdf); ?></a></td>
                            <td>
                                <a href="<?php echo e(route('activity_sheet.info', $activity_sheet->id)); ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="<?php echo e(route('activity_sheet.edit', $activity_sheet->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('activity_sheet.delete', $activity_sheet->id)); ?>"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <?php echo e($activity_sheets->links('pagination::bootstrap-4')); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/activity_sheet/activity_sheet-index.blade.php ENDPATH**/ ?>