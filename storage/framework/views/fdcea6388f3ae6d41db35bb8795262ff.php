<nav id="sidebar" class="col-md-4 col-lg-4 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">

                <!-- main side navbar -->
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a class="nav-link text-dark font-weight-bold" id="sidebar-arrow" data-toggle="collapse"
                href="#collapseSideSubNav" role="button" aria-expanded="false"
                aria-controls="collapseSideSubNav">
                <div class="arrow" id="arrow"></div>
                অধ্যায়-<?php echo e($chapter->chapter_no_bangla?? ''); ?>:<?php echo e($chapter->name ?? ''); ?>

                 <!-- sub navbar -->
                 <div class="collapse" id="collapseSideSubNav" style="margin-left: 30px;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                       <?php $__currentLoopData = $chapter->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <a class="nav-link" id="v-pills-1-1-tab" data-toggle="pill" href="#v-pills-1-1"
                       role="tab" aria-controls="v-pills-1-1" aria-selected="true">
                       <span><img src="<?php echo e(asset('assets/icon/right_in _round_Ash.png')); ?>"
                               alt=""></span>
                       পাঠ-<?php echo e($lesson->lesson_no_bangla ?? ''); ?>: <?php echo e($lesson->name ?? ''); ?>

                   </a>

                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </li>
        </ul>
    </div>
</nav>
<?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/frontend/layouts/partials/course-sidebar.blade.php ENDPATH**/ ?>