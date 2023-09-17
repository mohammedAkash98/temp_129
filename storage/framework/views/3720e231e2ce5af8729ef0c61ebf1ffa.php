<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>Home Content</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home_content.index')); ?>">Home Content</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <?php if($home_contents->count() == 0): ?>
        <div class="container mt-5 text-center">
            <h4>There is no Home Content added yet.</h4>
            <a href="<?php echo e(route('home_content.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Home Content</a>

        </div>
    <?php else: ?>
        <div class="container">
            <a href="<?php echo e(route('home_content.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Home Content</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $home_contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $home_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($home_content->name ?? ''); ?></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $home_content->description ?? ''; ?></td>
                            <td>
                                <a href="<?php echo e(route('home_content.info', $home_content->id)); ?>" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="<?php echo e(route('home_content.edit', $home_content->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('home_content.delete', $home_content->id)); ?>"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <?php echo e($home_contents->links('pagination::bootstrap-4')); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/home_content/home_content-index.blade.php ENDPATH**/ ?>