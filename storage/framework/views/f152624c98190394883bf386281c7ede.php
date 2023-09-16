<?php $__env->startSection('course_content'); ?>
    <div>
        <div class="container">
            <form action="<?php echo e(route('quiz.answer.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row mb-5 quize justify-content-center">
                    <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12 my-2" id=<?php echo e('question' . $key); ?> style="display: none">
                            <h3><b> Question <?php echo e($key + 1); ?>/<?php echo e(count($quizzes)); ?>

                                </b></h3>
                            <div class="col-md-12 my-4">
                                <h3><?php echo e($quiz->question); ?></h3>
                            </div>

                            <div class="col-md-12 my-4 text-center radiogroup">

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input1">
                                    <span class="float-left">
                                        <input type="radio" class="d-inline-block" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_1" onclick="click1()" value="<?php echo e($quiz->option_1); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_1"><?php echo e($quiz->option_1); ?></label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input2">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_2" onclick="click2()" value="<?php echo e($quiz->option_2); ?>">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_<?php echo e($quiz->id); ?>_2"><?php echo e($quiz->option_2); ?></label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input3">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_3" onclick="click3()" value="<?php echo e($quiz->option_3); ?>">
                                    </span>
                                    <label for="quiz_option_<?php echo e($quiz->id); ?>_3"><?php echo e($quiz->option_3); ?></label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input4">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[<?php echo e($quiz->id); ?>]"
                                            id="quiz_option_<?php echo e($quiz->id); ?>_4" onclick="click4()" value="<?php echo e($quiz->option_4); ?>">
                                    </span>
                                    <label for="quiz_option_<?php echo e($quiz->id); ?>_4"><?php echo e($quiz->option_4); ?></label>
                                    <input type="text" name="lesson_id" value="<?php echo e($quiz->lesson->id); ?>" hidden>
                                </div>
                            </div>

                            <span onclick="nextQues()" id=<?php echo e('next' . $key); ?> role="button"
                                class="btn btn-sm bg-danger text-white float-right">পরবর্তী</span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <button type="submit" class="btn btn-sm btn-success text-white">সংরক্ষন করুন</button>
                </div>
            </form>
        </div>
    </div>
    <Script>
        // start questions show
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
                i++;
            }

            if (i == count) {
                document.getElementById('next' + i).classList.add("d-none");
            }
        }

        // end

        function click1(){
            document.getElementById('input1').style.backgroundColor = "green";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click2(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "green";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click3(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "green";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click4(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "green";
        }


        // document.querySelector('.radiogroup').addEventListener('change', (evt) => {
        //     evt.currentTarget
        //         .querySelectorAll('.bg-success')
        //         .forEach(element => {
        //             element.classList.remove('bg-light');
        //         })

        //     evt.target
        //         .closest('.bg-light')
        //         .classList.add('bg-success');
        // }, true);

    </Script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.courses__lessons.course_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/courses__lessons/quiz.blade.php ENDPATH**/ ?>