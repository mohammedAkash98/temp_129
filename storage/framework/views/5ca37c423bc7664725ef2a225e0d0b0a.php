<?php $__env->startSection('content'); ?>
    <section class="registrationPage">
        <div class="container mt-5">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                        <div class="content">
                            <h2 class="mb-3">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা</h2>
                            <p class="mb-3">
                                বিশ্ব স্বাস্থ্য সংস্থা এর সংজ্ঞা অনু্যায়ী ১০-১৯ বছর
                                বয়সসীমাকে কৈশোরকাল বা বয়ঃসন্ধিকাল বলা
                                হয়। এই সময়ে ছেলে-মেয়ে উভয়েরই শারীরিক
                                বৃদ্ধি ও মানসিক পরিবর্তন হয় এবং তারা
                                প্রজননক্ষম হয়। এই সময়ে কিশোরকিশোরীদের
                                সঠিক শারীরিক ও মানসিক বিকাশের জন্য
                                প্রয়োজনীয় পুষ্টিকর খাবার, শারীরিক কার্যক্রম,
                                ব্যক্তিগত পরিষ্কার-পরিচ্ছন্নতা এবং সৃজনশীল
                                কাজে অংশগ্রহণ করা অত্যন্ত জরুরি। এই
                                বিষয়গুলো সম্পর্কে সঠিক ধারণা প্রদানের লক্ষে
                                ১০-১৯ বছর বয়সীদের জন্য পুষ্টি বিষয়ক
                                “কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা”
                                কোর্সটি প্রস্তুত করা হয়েছে, এই কোর্সে অংশ নিতে
                                এখনি নিবন্ধন করুন।
                            </p>
                        </div>

                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                        <div class="reg-page">
                            <h4 class="text-center mb-4 text-danger">রেজিস্ট্রেশন</h4>
                            <form action="<?php echo e(route('register.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <!-- Name -->
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input type="text" class="form-control border border-round p-3" id="name" name="name" placeholder='নাম'>
                                        <div>
                                            <?php if($errors->has('name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>




                                    <!-- Age -->
                                    <div class="col-md-6">

                                        <input type="number" placeholder="বয়স" class="form-control border border-round p-3" id="age" name="age">
                                        <div>
                                            <?php if($errors->has('age')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('age')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <!-- School Name -->
                                    <div class="col-md-6">

                                        <input type="text" placeholder="বিদ্যালয়ের নাম" class="form-control border border-round p-3" id="school" name="school_name">
                                        <div>
                                            <?php if($errors->has('school_name')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('school_name')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <!-- Class -->
                                    <div class="col-md-6">

                                        <input type="text" placeholder="শ্রেনী" class="form-control border border-round p-3" id="class" name="class">
                                        <div>
                                            <?php if($errors->has('class')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('class')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <!-- Gender -->
                                    <div class="col-md-6">

                                        <select class="form-control border border-round" name="gender" placeholder='লিঙ্গ'>
                                            <option value="" selected disabled>লিঙ্গ</option>
                                            <option value="male">্পুরুষ</option>
                                            <option value="female">মহিলা</option>
                                        </select>
                                        <div>
                                            <?php if($errors->has('gender')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <!-- Mobile Number -->
                                    <div class="col-md-6">

                                        <input type="tel" placeholder="মোবাইল নাম্বার" class="form-control border border-round p-3" id="mobile" name="phone_no">
                                        <div>
                                            <?php if($errors->has('phone_no')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('phone_no')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <!-- Email -->
                                    <div class="col-md-6">

                                        <input type="email" placeholder="ইমেইল" class="form-control border border-round p-3" id="email" name="email">
                                        <div>
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <!-- Password -->
                                    <div class="col-md-6">

                                        <input type="password" placeholder="পাসওয়ার্ড" class="form-control border border-round p-3" id="password" name="password">
                                        <div>
                                            <?php if($errors->has('password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                    <!-- Present Address -->
                                    <div class="col-md-12">

                                        <input class="form-control border border-round p-3" placeholder='বর্তমান ঠিকানা' id="presentAddress" name="present_address" rows="3"></ই>
                                        <div>
                                            <?php if($errors->has('present_address')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('present_address')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <!-- Permanent Address -->
                                    <div class="col-md-12">
                                        <input class="form-control border border-round p-3" placeholder='স্থায়ী ঠিকানা' id="presentAddress" name="permanent_address" rows="3"></ই>
                                        <div>
                                            <?php if($errors->has('permanent_address')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('parmanent_address')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Nutrition club সদস্য:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_club_member"
                                                id="nutritionMemberYes" value="yes" required>
                                            <label class="form-check-label" for="nutritionMemberYes">হ্যাঁ</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="is_club_member"
                                                id="nutritionMemberNo" value="no" required>
                                            <label class="form-check-label" for="nutritionMemberNo">না</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success border border-round p-2">একাউন্ট তৈরি করুন</button>
                                </div>
                            </form>
                            <p class="text-center mt-3">একাউন্ট আছে? <a href="<?php echo e(route('login')); ?>">লগ ইন</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/user/register.blade.php ENDPATH**/ ?>