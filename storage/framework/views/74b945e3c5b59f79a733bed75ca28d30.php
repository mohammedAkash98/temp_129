<?php $__env->startSection('page_content'); ?>
    <div class="top-navbar">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row ">
                <div class="box col-md-3">
                    <h2 class="box-title1">১</h2>
                    <p class="box-text1">খাদ্য ও পুষ্টি</p>
                    <button>সম্পন্ন</button>
                </div>

                <div class="box col-md-3">
                    <h2 class="box-title2">২</h2>
                    <p class="box-text2">স্বাস্থ্যসম্মত জীবনধারা</p>
                    <a href="<?php echo e(route('courses.show', ['course_name' => 'healthy_life'])); ?>">
                        <button> সম্পন্ন</button>
                    </a>
                </div>
                <div class="box col-md-3">
                    <h2 class="box-title3">৩</h2>
                    <p class="box-text3">মানসিক স্বাস্থ্য</p>
                    <button>সম্পন্ন</button>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="box col-md-4">
                    <h2 class="box-title4">৪</h2>
                    <p class="box-text4">নেতৃত্ব</p>
                    <button>সম্পন্ন</button>
                </div>
                <div class="box col-md-4">
                    <h2 class="box-title5">৫</h2>
                    <p class="box-text5">সামাজিক ক্ষেত্র</p>
                    <button>সম্পন্ন</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\temp_12\resources\views/frontend/courses__lessons/course_chapter.blade.php ENDPATH**/ ?>