<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>Chapter</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('chapter.index')); ?>">Chapter</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

<?php if($chapters->count() == 0): ?>
<div class="container mt-5 text-center">
    <h4>There is no chapter added yet.</h4>
    <a href="<?php echo e(route('chapter.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
        Add Chapter</a>

</div>

<?php else: ?>
    <div class="container">
        <a href="<?php echo e(route('chapter.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
            Add Chapter</a>
            <a href="<?php echo e(route('chapter.pdf.report')); ?>" class="btn btn-success btn-sm mb-3 text-white"><i class="fa-solid fa-file-pdf"></i>
                Generate Reports</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($chapter->chapter_no_bangla); ?></td>
                        <td><?php echo e($chapter->name ?? ''); ?></td>
                        <td>
                            <a href="<?php echo e(route('chapter.edit', $chapter->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                            <a href="<?php echo e(route('chapter.delete', $chapter->id)); ?>" class="btn btn-danger btn-sm text-white"><i
                                    class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/chapter/chapter-index.blade.php ENDPATH**/ ?>