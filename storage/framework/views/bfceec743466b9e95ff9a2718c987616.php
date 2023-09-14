<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('user.index')); ?>">User</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <form class="form-inline ml-auto mb-3" action="<?php echo e(route('user.search')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="input-group">
            <input class="form-control" type="text" name="query" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="container">
        <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
            Add User</a>
        <a href="<?php echo e(route('user.pdf.report')); ?>" class="btn btn-success btn-sm mb-3 text-white"><i class="fa-solid fa-file-pdf"></i>
            Generate Reports</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(++$sl); ?></td>
                        <td><?php echo e($user->name ?? ''); ?></td>
                        <td><?php echo e($user->type ?? ''); ?></td>
                        <td>
                            <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                            <a href="<?php echo e(route('user.delete', $user->id)); ?>" class="btn btn-danger btn-sm text-white"><i
                                    class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <?php echo e($users->links('pagination::bootstrap-4')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/user/user-index.blade.php ENDPATH**/ ?>