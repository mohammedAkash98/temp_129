<?php $__env->startSection('course_content'); ?>

    <div class="card-body">
        <?php if($lesson->image): ?>
            <img class="w-100 mb-2" src="<?php echo e(asset('storage/lesson/' . $lesson->image)); ?>" alt="<?php echo e($lesson->name); ?>">
        <?php endif; ?>
        <?php if($lesson->audio): ?>
            <audio class="w-100 mb-2" controls>
                <source src="<?php echo e(asset('storage/lesson/' . $lesson->audio)); ?>" type="audio/mpeg">
            </audio>
        <?php endif; ?>

        <?php if($lesson->video): ?>
            <video class="w-100 mb-2" controls>
                <source src="<?php echo e(asset('storage/lesson/' . $lesson->video)); ?>" type="video/mp4">

            </video>
        <?php endif; ?>

        <h3 class="mb-3"><b><?php echo e($lesson->name); ?></b></h3>
        
        <p class="card-text mb-3">
            <?php echo $lesson->header_description; ?>

            <a data-toggle="collapse" href="#collapseExample1_1" role="button" aria-expanded="false"
                aria-controls="collapseExample1_1">
                <b> পাঠ সম্পর্কিত তথ্য</b>
            </a>
        </p>

        <div class="collapse mb-3" id="collapseExample1_1">
            <?php echo $lesson->description; ?>

        </div>

        <div class="float-right">
            <div class="d-flex align-items-center mb-2 mr-3">
                <small>
                    <span class="mr-1 text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15"
                            zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="15"
                            preserveAspectRatio="xMidYMid meet" version="1.0">
                            <defs>
                                <clipPath id="id1">
                                    <path
                                        d="M 2.328125 4.222656 L 27.734375 4.222656 L 27.734375 24.542969 L 2.328125 24.542969 Z M 2.328125 4.222656 "
                                        clip-rule="nonzero" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#id1)">
                                <path fill="rgb(13.729858%, 12.159729%, 12.548828%)"
                                    d="M 27.5 7.53125 L 24.464844 4.542969 C 24.15625 4.238281 23.65625 4.238281 23.347656 4.542969 L 11.035156 16.667969 L 6.824219 12.523438 C 6.527344 12.230469 6 12.230469 5.703125 12.523438 L 2.640625 15.539062 C 2.332031 15.84375 2.332031 16.335938 2.640625 16.640625 L 10.445312 24.324219 C 10.59375 24.472656 10.796875 24.554688 11.007812 24.554688 C 11.214844 24.554688 11.417969 24.472656 11.566406 24.324219 L 27.5 8.632812 C 27.648438 8.488281 27.734375 8.289062 27.734375 8.082031 C 27.734375 7.875 27.648438 7.679688 27.5 7.53125 Z M 27.5 7.53125 "
                                    fill-opacity="1" fill-rule="nonzero" />
                            </g>
                        </svg>
                    </span>
                    আমি পাঠটি সম্পন্ন করেছি
                </small>
            </div>

            <a type="button" class="btn btn-sm btn-color float-right"
                href="<?php echo e(route('quiz.view', ['chapter_id' => $lesson->chapter->id, 'lesson_id' => $lesson->id])); ?>">
                নিজেকে যাচাই করুন</a>
        </div>
    </div>
        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/course_view.blade.php ENDPATH**/ ?>