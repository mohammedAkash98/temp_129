<?php $__env->startSection('page_content'); ?>
<div class="container mt-5">
    <div class="row">
        <?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo e(asset('storage/other/'. $other->image)); ?>" class="card-img-top" alt="<?php echo e($other->name); ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($other->name); ?></h5>
                    <div class="truncated-text" style="max-height: 80px; overflow: hidden;">
                        <?php echo ($other->description); ?>

                    </div>
                    <?php if(strlen(strip_tags($other->description)) > 160): ?>
                        <a class="btn btn-primary btn-sm mt-4" href="<?php echo e(route('others.frontend.show',$other->id)); ?>">Read More</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<style>
    .truncated-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Show only 2 lines */
        -webkit-box-orient: vertical;
    }
</style>
<!-- Add Bootstrap JS and jQuery (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('.view-more').click(function () {
            $(this).toggleClass('collapsed');
            if ($(this).hasClass('collapsed')) {
                $(this).text('View More');
            } else {
                $(this).text('View Less');
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/resource/other-frontend-index.blade.php ENDPATH**/ ?>