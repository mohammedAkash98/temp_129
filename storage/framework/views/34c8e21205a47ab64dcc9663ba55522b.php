<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Chapter</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('chapter.index')); ?>">Chapter</a></li>
        <li class="breadcrumb-item active">Add Chapter</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Add Chapter</h2>
    <form action="<?php echo e(route('chapter.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="chapter_no_bangla">Chapter No (Bangla):</label>
            <input type="text" class="form-control" id="chapter_no_bangla" name="chapter_no_bangla" >
            <?php if($errors->has('chapter_no_bangla')): ?>
            <span class="text-danger"><?php echo e($errors->first('chapter_no_bangla')); ?></span>
            <?php endif; ?>
            <label for="chapterName">Chapter Name:</label>
            <input type="text" class="form-control" id="chapterName" name="name" >
            <?php if($errors->has('name')): ?>
            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/chapter/chapter-create.blade.php ENDPATH**/ ?>