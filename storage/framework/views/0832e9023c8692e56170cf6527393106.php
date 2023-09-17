<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>team</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('team.index')); ?>">Team</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <?php if($teams->count() == 0): ?>
        <div class="container mt-5 text-center">
            <h4>There is no team added yet.</h4>
            <a href="<?php echo e(route('team.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Team</a>

        </div>
    <?php else: ?>
        <div class="container">
            <a href="<?php echo e(route('team.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Team</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($team->name ?? ''); ?></td>
                            <td><img width="100" src="<?php echo e(asset('storage/team/' . $team->image)); ?>"
                                    alt="<?php echo e($team->name); ?>"></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                <?php echo $team->designation ?? ''; ?></td>
                            <td><?php echo e($team->facebook_url ?? ''); ?></td>
                            <td><?php echo e($team->instagram_url ?? ''); ?></td>
                            <td><?php echo e($team->twitter_url ?? ''); ?></td>
                            <td>
                                <a href="<?php echo e(route('team.info', $team->id)); ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="<?php echo e(route('team.edit', $team->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('team.delete', $team->id)); ?>"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <?php echo e($teams->links('pagination::bootstrap-4')); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/team/team-index.blade.php ENDPATH**/ ?>