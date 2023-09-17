<?php $__env->startSection('page_content'); ?>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>PDF</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $activity_sheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity_sheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                <td><?php echo e(++$sl); ?></td>

                <td><a href="<?php echo e(asset('storage/activity_sheet/'. $activity_sheet->pdf)); ?>" target="_blank"><?php echo e($activity_sheet->pdf); ?></a></td>
                <td><a href="<?php echo e(asset('storage/activity_sheet/'. $activity_sheet->pdf)); ?>" target="_blank" class="btn btn-info btn-sm"><i class="lni lni-eye"></i> View</a></td>
               </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($activity_sheets->links('pagination::bootstrap-4')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/resource/activity_sheet-frontend-index.blade.php ENDPATH**/ ?>