<?php $__env->startSection('page_content'); ?>
<div class="container mt-5">
    <div class="row g-4">
       <?php $__currentLoopData = $svccs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-4 mb-4">
        <div class="p-2 border">
            <img class="img-fluid" src="<?php echo e(asset('storage/svcc/'. $svcc->image)); ?>" alt="<?php echo e($svcc->name); ?>">
        </div>

        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($svccs->links('pagination::bootstrap-4')); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/resource/svcc-frontend-index.blade.php ENDPATH**/ ?>