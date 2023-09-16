<?php $__env->startSection('course_content'); ?>
    <div>
        <div class="container">
            <form action="<?php echo e(route('quiz.answer.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row mb-5 quize justify-content-center">

                    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="text" name="lesson_id" value=<?php echo e($quiz->lesson_id); ?> hidden>
                        <div class="col-md-12 my-2" id=<?php echo e('question' . $key); ?> style="display: none">
                            <h3><b> Question <?php echo e($key + 1); ?>/<?php echo e(count($quizzes)); ?>

                                </b></h3>
                            <div class="col-md-12 my-4">
                                <h3><?php echo e($quiz->question); ?></h3>
                            </div>

                            <div class="col-md-12 my-4 text-center">

                                <div class="col-md-12 my-2 rounded-pill py-2" style="background-color: #f8f9fa"
                                    id="input1">
                                    <span class="float-left">
                                        <input type="radio" class="d-inline-block" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_1" value="<?php echo e($quiz->option_1); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_1"><?php echo e($quiz->option_1); ?></label>
                                </div>

                                <div class="col-md-12 my-2  rounded-pill py-2" style="background-color: #f8f9fa"
                                    id="input2">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_2" value="<?php echo e($quiz->option_2); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_2"><?php echo e($quiz->option_2); ?></label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" style="background-color: #f8f9fa"
                                    id="input3">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_3" value="<?php echo e($quiz->option_3); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_3"><?php echo e($quiz->option_3); ?></label>
                                </div>

                                <div class="col-md-12 my-2  rounded-pill py-2" style="background-color: #f8f9fa"
                                    id="input4">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_4" value="<?php echo e($quiz->option_4); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_4"><?php echo e($quiz->option_4); ?></label>
                                </div>
                            </div>

                            <span onclick="nextQues()" id=<?php echo e('next' . $key); ?> role="button"
                                class="btn btn-sm bg-danger text-white float-right">পরবর্তী</span>
                        </div>
                        <button type="submit" class="btn btn-sm btn-success text-white d-none">সংরক্ষন
                            করুন</button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <button type="submit">save</button>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <Script>
        // start questions and save show
        window.onload = function() {
            let ques1 = document.getElementById("question0");
            ques1.style.display = "block";
        }

        let count = <?php echo e($key); ?>;
        let i = 1;

        function nextQues() {

            if (i >= 1 && i <= count) {

                document.getElementById('question' + i).style.display = "block";
                document.getElementById('question' + (i - 1)).style.display = "none";

                if (i == count) {
                    console.log(i, count);
                    document.getElementById('next' + i).classList.add("d-none");
                    document.getElementById('btn-submit').classList.remove("d-none");
                }
                i++;
            }
        }


        // end

        // input button
        $('input[type="radio"]').on('click', function() {
            $('.rounded-pill').removeClass('bg-success');
            $(this).closest('.rounded-pill').addClass('bg-success');
        });
    </Script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/quiz.blade.php ENDPATH**/ ?>