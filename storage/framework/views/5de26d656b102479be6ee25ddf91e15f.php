<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Quiz</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('quiz.index')); ?>">Quiz</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="<?php echo e(route('quiz.index')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
        <div class="card">
          <div class="card-header">
            <h3>Multiple Choice Question</h3>
          </div>
          <div class="card-body">
             <p class="card-text"><strong>Q. <?php echo e($quiz->question); ?></strong></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                   1. <?php echo e($quiz->option_1); ?>

                  </li>
                  <li class="list-group-item">
                    2. <?php echo e($quiz->option_2); ?>

                  </li>
                  <li class="list-group-item">
                    3. <?php echo e($quiz->option_3); ?>

                  </li>
                  <li class="list-group-item">
                   4. <?php echo e($quiz->option_4); ?>

                  </li>
            </ul>
            <p class="card-text text-muted">The correct answer is <strong><?php echo e($quiz->correct_answer); ?></strong>.</p>
          </div>
        </div>
      </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/quiz/quiz-info.blade.php ENDPATH**/ ?>