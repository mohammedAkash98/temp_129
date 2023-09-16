<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Team</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('team.index')); ?>">Team</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('team.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single team Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="<?php echo e(asset('storage/team/'. $team->image)); ?>" class="card-img-top" alt="<?php echo e($team->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($team->name); ?></h5>
                            <p class="card-text"><?php echo e($team->designation); ?></p>
                            <p class="card-text"><strong>Facebook:</strong> <?php echo e($team->facebook_url); ?></p>
                            <p class="card-text"><strong>Instagram:</strong> <?php echo e($team->instagram_url); ?></p>
                            <p class="card-text"><strong>Twitter:</strong> <?php echo e($team->twitter_url); ?></p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/team/team-info.blade.php ENDPATH**/ ?>