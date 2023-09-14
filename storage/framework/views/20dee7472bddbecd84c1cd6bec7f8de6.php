<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Quiz</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('quiz.index')); ?>">Quiz</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->


    <?php if($quizzes->count() == 0): ?>
        <div class="container text-center">
            <h4>There is no quiz added yet.</h4>
            <a href="<?php echo e(route('quiz.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Quiz</a>

        </div>
    <?php else: ?>
        <div class="container mt-5">
            <a href="<?php echo e(route('quiz.create')); ?>" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
                Add Quiz</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Chapter</th>
                        <th>Lesson</th>
                        <th>Total Q.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e(++$sl); ?></td>
                            <td><?php echo e($quiz->chapter->name ?? ''); ?></td>
                            <td><?php echo e($quiz->lesson->name ?? ''); ?></td>
                            <td><?php echo e($quiz->question); ?></td>
                            <td>
                                <a href="<?php echo e(route('quiz.info',$quiz->id)); ?>" class="btn btn-info btn-sm text-white"> <i
                                        class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="" class="btn btn-primary btn-sm text-white"> <i
                                        class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="<?php echo e(route('quiz.delete',$quiz->id)); ?>" class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <?php echo e($quizzes->links('pagination::bootstrap-4')); ?>

        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/quiz/quiz-index.blade.php ENDPATH**/ ?>