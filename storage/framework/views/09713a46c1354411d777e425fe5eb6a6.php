<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Lesson</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('lesson.index')); ?>">Lesson</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->


    <?php if($lessons->count() == 0): ?>
        <div class="container mt-5 text-center">
            <h4>There is no lesson added yet.</h4>
            <a href="<?php echo e(route('lesson.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Lesson</a>

        </div>
    <?php else: ?>
        <div class="container">
            <a href="<?php echo e(route('lesson.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Lesson</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Lesson No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Chapter</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($lesson->lesson_no_bangla); ?></td>
                            <td><?php echo e($lesson->name ?? ''); ?></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo e($lesson->description ?? ''); ?></td>
                            <td><?php echo e($lesson->chapter->name ?? ''); ?></td>
                            <td><img width="100" src="<?php echo e(asset('storage/lesson/' . $lesson->image)); ?>"
                                    alt="<?php echo e($lesson->name); ?>"></td>
                            <td>
                                <a href="<?php echo e(route('lesson.info', $lesson->id)); ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="<?php echo e(route('lesson.edit', $lesson->id)); ?>"
                                    class="btn btn-primary btn-sm text-white"> <i class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('lesson.delete', $lesson->id)); ?>"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <?php echo e($lessons->links('pagination::bootstrap-4')); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/lesson/lesson-index.blade.php ENDPATH**/ ?>