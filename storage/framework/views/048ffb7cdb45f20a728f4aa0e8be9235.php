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
                              <div class="form-group">
                                  <label for="name">Name:</label>
                                  <input type="text" class="form-control" id="name" name="name" >
                              </div>
                      
                              <!-- Age -->
                              <div class="form-group">
                                  <label for="age">Age:</label>
                                  <input type="number" class="form-control" id="age" name="age" >
                              </div>
                      
                              <!-- School Name -->
                              <div class="form-group">
                                  <label for="school">School Name:</label>
                                  <input type="text" class="form-control" id="school" name="school_name" >
                              </div>
                      
                              <!-- Class -->
                              <div class="form-group">
                                  <label for="class">Class:</label>
                                  <input type="text" class="form-control" id="class" name="class" >
                              </div>
                      
                              <!-- Gender -->
                              <div class="form-group">
                                  <label>Gender:</label>
                                  <select class="form-control" name="gender" id="">
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                  </select>
                              </div>
                      
                              <!-- Mobile Number -->
                              <div class="form-group">
                                  <label for="mobile">Mobile Number:</label>
                                  <input type="tel" class="form-control" id="mobile" name="phone_no" >
                              </div>
                      
                              <!-- Email -->
                              <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" name="email" >
                              </div>
                      
                              <!-- Password -->
                              <div class="form-group">
                                  <label for="password">Password:</label>
                                  <input type="password" class="form-control" id="password" name="password" >
                              </div>
                      
                              <!-- Present Address -->
                              <div class="form-group">
                                  <label for="presentAddress">Present Address:</label>
                                  <textarea class="form-control" id="presentAddress" name="present_address" rows="3" ></textarea>
                              </div>
                      
                              <!-- Permanent Address -->
                              <div class="form-group">
                                  <label>Permanent Address:</label>
                                  <label for="presentAddress">Permanent Address:</label>
                                  <textarea class="form-control" id="presentAddress" name="permanent_address" rows="3" ></textarea>
                              </div>
                              <div class="form-group">
                                  <label>Nutrition Member:</label>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="is_club_member" id="nutritionMemberYes" value="yes" required>
                                      <label class="form-check-label" for="nutritionMemberYes">Yes</label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="is_club_member" id="nutritionMemberNo" value="no" required>
                                      <label class="form-check-label" for="nutritionMemberNo">No</label>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Register</button>
                          </form>
                        <p class="text-center mt-3">Already have an account? <a href="#">Login</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\temp_12\resources\views/frontend/user/register.blade.php ENDPATH**/ ?>