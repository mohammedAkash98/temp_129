<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h1>Welcome, <span id="userName"><?php echo e(auth()->user()->name); ?></span>!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-5">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <h5 class="card-title">Chapter Completed</h5>
                    <p class="card-text">You have completed <span id="completedCourses">5</span> chapter.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-5">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Lesson Completed</h5>
                    <p class="card-text">You have completed <span id="completedLesson">5</span> courses.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Exams Participated</h5>
                    <p class="card-text">You have participated <span id="participatedExams">10</span> exams.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">Your progress report</h5>
                    <p class="card-text"> <span id="progressReport">90%</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/frontend/dashboard.blade.php ENDPATH**/ ?>