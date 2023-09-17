<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Lesson</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('lesson.index')); ?>">Lesson</a></li>
        <li class="breadcrumb-item active">Add Lesson</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->

  <?php if($chapters->count() == 0): ?>
        <div class="container text-center">
            <h4>There is no chapter added yet.</h4>
            <a href="<?php echo e(route('chapter.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Chapter</a>
        </div>
        <?php else: ?>

  <div class="container">
    <h2>Add Lesson</h2>
    <form action="<?php echo e(route('lesson.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-3">
            <label for="chapterName">Chapter Name:</label>
           <select class="form-control" name="chapter_id" id="chapter_id">
            <option value="" disabled selected>Select One</option>
           <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($chapter->id); ?>"><?php echo e($chapter->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </div>

        <div class="form-group mb-3">
            <label for="lessonName">Lesson Name:</label>
            <input type="text" class="form-control" id="lessonName" name="name">
            <?php if($errors->has('name')): ?>
                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="lesson_no_bangla">Lesson No(Bangla):</label>
            <input type="text" class="form-control" id="lesson_no_bangla" name="lesson_no_bangla">
            <?php if($errors->has('lesson_no_bangla')): ?>
                <span class="text-danger"><?php echo e($errors->first('lesson_no_bangla')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="lessonImage">Image:</label>
            <input type="file" class="form-control-file my-3" id="lessonImage" name="image">
            <?php if($errors->has('image')): ?>
                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="editor">Description:</label>
            <textarea class="form-control" id="editor" name="description" rows="4"></textarea>
            <?php if($errors->has('description')): ?>
                <span class="text-danger"><?php echo e($errors->first('description')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>
<?php endif; ?>
<?php echo $__env->make('backend.layouts.partials.ckeditor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/lesson/lesson-create.blade.php ENDPATH**/ ?>