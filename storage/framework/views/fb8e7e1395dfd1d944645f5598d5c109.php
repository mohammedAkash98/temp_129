<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php $__env->startSection('page_content'); ?>
<div class="container mt-5">
    <div class="row g-4">
       <?php $__currentLoopData = $svccs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-md-4 mb-4">
        <div class="p-2 border">
            <a href="#" data-toggle="modal" data-target="#imageModal<?php echo e($svcc->id); ?>">
                <img class="img-fluid" src="<?php echo e(asset('storage/svcc/'. $svcc->image)); ?>" alt="<?php echo e($svcc->name); ?>">
            </a>
        </div>
        </div>

        <!-- Bootstrap Modal -->
        <div class="modal fade" id="imageModal<?php echo e($svcc->id); ?>" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel<?php echo e($svcc->id); ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel<?php echo e($svcc->id); ?>"><?php echo e($svcc->name); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="<?php echo e(asset('storage/svcc/'. $svcc->image)); ?>" alt="<?php echo e($svcc->name); ?>">
                    </div>
                </div>
            </div>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($svccs->links('pagination::bootstrap-4')); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/resource/svcc-frontend-index.blade.php ENDPATH**/ ?>