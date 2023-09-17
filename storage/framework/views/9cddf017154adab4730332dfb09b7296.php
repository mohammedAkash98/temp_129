<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Other</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('other.index')); ?>">Other</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->


    <div class="container">
        <h2>Edit</h2>
        <form action="<?php echo e(route('other.update', $other->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row g-4">
                <div class="col-md-12">
                    <label for="name">Title:</label>
                    <input type="text" value="<?php echo e($other->name); ?>" class="form-control" id="name" name="name">
                </div>

                <div class="col-md-12">
                    <label for="description">Description:</label>
                   <textarea name="description" id="editor" cols="30" rows="10"><?php echo e($other->description); ?></textarea>
                  </div>

                  <div class="col-md-12">
                    <label for="url">URL:</label>
                    <input type="text" value="<?php echo e($other->url); ?>" class="form-control" id="url" name="url" >
                  </div>

                  <div class="col-md-12">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" >
                  </div>

            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i>
                Save</button>
        </form>
    </div>
<?php echo $__env->make('backend.layouts.partials.ckeditor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/other/other-edit.blade.php ENDPATH**/ ?>