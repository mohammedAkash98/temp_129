

<nav id="sidebar" class="col-md-4 col-lg-4 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">

                <!-- main side navbar -->
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="nav-link text-dark font-weight-bold" id="sidebar-arrow" data-toggle="collapse"
                href="<?php echo e("#collapseSideSubNav" . $key+1); ?>" role="button" aria-expanded="false"
                aria-controls="<?php echo e('collapseSideSubNav' . $key+1); ?>">
                <div class="arrow" id="arrow"></div>
                অধ্যায়-<?php echo e($chapter->chapter_no_bangla?? ''); ?>:<?php echo e($chapter->name ?? ''); ?>

                 <!-- sub navbar -->
                 <div class="collapse" id="<?php echo e('collapseSideSubNav' . $key+1); ?>" style="margin-left: 30px;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                       <?php $__currentLoopData = $chapter->lessons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_l => $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                       <?php if(Auth::user()->overview->current_lesson_id >= $lesson->id): ?>
                       <a class="nav-link"  href="<?php echo e(route('courses.view',$lesson->id)); ?>"
                        aria-selected="true">
                       <span><i class="lni lni-checkmark-circle h6" style="color: green"></i></span>
                       পাঠ-<?php echo e($lesson->lesson_no_bangla ?? ''); ?>: <?php echo e($lesson->name ?? ''); ?>

                        <?php else: ?>
                        <a class="nav-link"
                            aria-selected="true">
                           <span><i class="lni lni-lock-alt h6" style="color: red"></i></span>
                           পাঠ-<?php echo e($lesson->lesson_no_bangla ?? ''); ?>: <?php echo e($lesson->name ?? ''); ?>

                        <?php endif; ?>

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
<?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/courses_sidebar.blade.php ENDPATH**/ ?>