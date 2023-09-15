<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Quiz</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('quiz.index')); ?>">Quiz</a></li>
        <li class="breadcrumb-item active">Quiz Lesson</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Quiz</h2>
    <form action="<?php echo e(route('quiz.update',$quiz->id)); ?>" method="POST" >
        <?php echo csrf_field(); ?>
     <div class="row">
           
           <div class="form-group mb-3 col-md-6">
            <label for="chapterName">Chapter Name:</label>
           <select class="form-control" name="chapter_id" id="chapter_id" required>
            <option value="" disabled selected>Select One</option>
           <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($chapter->id); ?>"><?php echo e($chapter->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </div>
                
        <div class="form-group mb-3 col-md-6">
            <label for="lessonName">Lesson Name:</label>
           <select class="form-control" name="lesson_id" id="lesson_id" required>
            <option value="" disabled selected>Select One</option>
           <?php $__currentLoopData = $lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($lesson->id); ?>"><?php echo e($lesson->name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </div>

        <div class="form-group col-md-12 mb-3">
            <input type="text" class="form-control" value='<?php echo e($quiz->question); ?>' id="question" name="question" placeholder="Enter Question">
            <?php if($errors->has('question')): ?>
                <span class="text-danger"><?php echo e($errors->first('question')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input value="<?php echo e($quiz->option_1); ?>" type="text" class="form-control"  id="option_1" name="option_1" placeholder="Option 1">
            <?php if($errors->has('option_1')): ?>
                <span class="text-danger"><?php echo e($errors->first('option_1')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input value="<?php echo e($quiz->option_2); ?>" type="text" class="form-control" id="option2" name="option_2" placeholder="Option 2">
            <?php if($errors->has('option_2')): ?>
                <span class="text-danger"><?php echo e($errors->first('option_2')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input value="<?php echo e($quiz->option_3); ?>" type="text" class="form-control" id="option_3" name="option_3" placeholder="Option 3">
            <?php if($errors->has('option_3')): ?>
                <span class="text-danger"><?php echo e($errors->first('option_3')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-6 mb-3">
            <input value="<?php echo e($quiz->option_4); ?>" type="text" class="form-control" id="option_4" name="option_4" placeholder="Option 4">
            <?php if($errors->has('option_4')): ?>
                <span class="text-danger"><?php echo e($errors->first('option_4')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group col-md-12">
            <input value="<?php echo e($quiz->correct_answer); ?>" type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Correct Answer">
            <?php if($errors->has('correct_answer')): ?>
                <span class="text-danger"><?php echo e($errors->first('correct_answer')); ?></span>
            <?php endif; ?>
        </div>
     </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/quiz/quiz-edit.blade.php ENDPATH**/ ?>