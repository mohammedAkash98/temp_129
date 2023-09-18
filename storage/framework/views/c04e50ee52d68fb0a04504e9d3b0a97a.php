<?php $__env->startSection('page_content'); ?>
<div class="container mt-5">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <img class="w-100" src="<?php echo e(asset('storage/seminar/'. $seminar->image)); ?>" class="card-img-top" alt="<?php echo e($seminar->name); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($seminar->name ?? ''); ?></h5>
                    <div class="card-text"><p><strong>Date: </strong><?php echo e($seminar->date); ?></p></div>
                    <div class="card-text"><p><strong>Time: </strong><?php echo e($seminar->time); ?></p></div>
                    <div class="card-text"><p><strong>Location: </strong><?php echo e($seminar->location); ?></p></div>
                    <div class="card-text text-justify">
                        <?php echo $seminar->description ?? ''; ?>

                    </div>

                </div>

            </div>
        </div>
        <a class="btn btn-primary btn-sm my-4" href="<?php echo e(route('seminar.frontend.index')); ?>"><i class="lni lni-arrow-left"></i> Go Back</a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/seminar/seminar-frontend-show.blade.php ENDPATH**/ ?>