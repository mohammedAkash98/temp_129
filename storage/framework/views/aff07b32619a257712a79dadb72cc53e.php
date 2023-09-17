<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>Webinar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('webinar.index')); ?>">Webinar</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <?php if($webinars->count() == 0): ?>
        <div class="container mt-5 text-center">
            <h4>There is no webinar added yet.</h4>
            <a href="<?php echo e(route('webinar.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Webinar</a>

        </div>
    <?php else: ?>
        <div class="container">
            <a href="<?php echo e(route('webinar.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Webinar</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $webinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $webinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($webinar->name ?? ''); ?></td>
                            <td><img width="100" src="<?php echo e(asset('storage/webinar/' . $webinar->image)); ?>"
                                    alt="<?php echo e($webinar->name); ?>"></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                <?php echo $webinar->description ?? ''; ?></td>
                            <td><?php echo e($webinar->date ?? ''); ?></td>
                            <td><?php echo e($webinar->time ?? ''); ?></td>
                            <td><?php echo e($webinar->location ?? ''); ?></td>
                            <td>
                                <a href="<?php echo e(route('webinar.info', $webinar->id)); ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="<?php echo e(route('webinar.edit', $webinar->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('webinar.delete', $webinar->id)); ?>"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/webinar/webinar-index.blade.php ENDPATH**/ ?>