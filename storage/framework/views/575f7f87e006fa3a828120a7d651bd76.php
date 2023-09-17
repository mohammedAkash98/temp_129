<?php $__env->startSection('page_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/course.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="container">

        <!-- upper navbar -->
        <nav class="navbar navbar-expand-lg bg-light mb-3 mt-3 top-nav">
            <div class="navbar-collapse" id="navbarNav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('courses')); ?>"
                                class="text-dark font-weight-bold">Course</a></li>
                        <li class="breadcrumb-item text-dark" aria-current="page">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত
                            জীবনধারা</li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="row m-0">
            <!-- side navbar -->
          <?php echo $__env->make('frontend.courses__lessons.courses_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



            <!-- Main content -->
            <main class="col-md-8 col-lg-8 ms-sm-auto px-md-4">
                <div class="tab-content" id="v-pills-tabContent">
                    <?php echo $__env->yieldContent('course_content'); ?>
                </div>
            </main>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>
    <script src="<?php echo e(asset('assets/js/course.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/course_2.blade.php ENDPATH**/ ?>