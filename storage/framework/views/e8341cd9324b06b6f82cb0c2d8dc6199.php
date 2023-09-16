<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <hr>
    </nav>
  </div>
<div class="container">
    <div class="row g-4">

            <div class="col-md-3">
                <a href="<?php echo e(route('user.index')); ?>">
                <div class="dashboard-box bg-primary text-white font-weight-bold p-4">
                    <h4>User</h4>
                    <p><?php echo e($users->count()); ?></p>
                </div>
            </a>
            </div>


        <div class="col-md-3">
            <a href="<?php echo e(route('chapter.index')); ?>">
            <div class="dashboard-box bg-info text-white font-weight-bold p-4">
                <h4>Chapter</h4>
                <p><?php echo e($chapters->count()); ?></p>
            </div>
        </a>
        </div>


            <div class="col-md-3">
                <a href="<?php echo e(route('lesson.index')); ?>">
                <div class="dashboard-box bg-success text-white font-weight-bold p-4">
                    <h4>Lesson</h4>
                    <p><?php echo e($lessons->count()); ?></p>
                </div>
            </a>
            </div>


        <div class="col-md-3">
            <a href="<?php echo e(route('quiz.index')); ?>">
            <div class="dashboard-box bg-danger text-white font-weight-bold p-4">
                <h4>Quiz</h4>
                <p><?php echo e($quizzes->count()); ?></p>
            </div>
        </a>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/admin.blade.php ENDPATH**/ ?>