<?php $__env->startSection('page_content'); ?>
    <section class="section profile m-5">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <?php if(auth()->user()->image): ?>
                            <img src="<?php echo e(asset('storage/student/' . auth()->user()->image ?? '')); ?> "
                                alt="<?php echo e(auth()->user()->name); ?>" class="p-3" style="max-height: 480px; max-width: 360px">
                        <?php else: ?>
                            <img src="<?php echo e(asset('images/no_user.gif')); ?>" alt="Profile" class="rounded-circle">
                        <?php endif; ?>
                        <h2><?php echo e(auth()->user()->name ?? ''); ?></h2>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                            
                        </ul>


                        <div class="tab-content pt-2">

                            
                            <div class="tab-pane fade show active profile-overview p-2" id="profile-overview">
                                <h5 class="card-title pt-3">Profile Details</h5>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->name ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Email</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->email ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">School Name</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->school_name ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Class</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->class ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Gender</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->gender ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Age</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->age ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Phone No</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->phone_no ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Present Address</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->present_address ?? ''); ?></div>
                                </div>

                                <div class="row pb-2">
                                    <div class="col-lg-3 col-md-4 label ">Division</div>
                                    <div class="col-lg-9 col-md-8"><?php echo e(auth()->user()->division ?? ''); ?></div>
                                </div>
                            </div>

                            
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <?php if(auth()->user()->image): ?>
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                                        Profile
                                        Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?php echo e(asset('storage/student/' . auth()->user()->image)); ?>"
                                            alt="<?php echo e(auth()->user()->name); ?>" class="rounded-circle"
                                            style="max-width: 80px; max-height: 100px">
                                        <div class="mt-3"> <a href="<?php echo e(route('student.delete', auth()->user()->id)); ?>"
                                                class="btn btn-danger btn-sm">Delete</a></div>

                                    </div>
                                <?php endif; ?>
                                <!-- Profile Edit Form -->
                                <form action="<?php echo e(route('student.update', auth()->user()->id)); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <?php if(!auth()->user()->image): ?>
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label"> Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="<?php echo e(asset('images/no_user.gif')); ?>" alt="Profile"
                                                    class="rounded-circle">

                                            </div>
                                        <?php endif; ?>
                                        <?php if(!auth()->user()->image): ?>
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label"> Upload
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="file" class="form-control-file my-3" id="lessonImage"
                                                    name="image">

                                            </div>
                                        <?php endif; ?>
                                        <?php if(auth()->user()->image): ?>
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                                                Update Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="pt-2">
                                                    <input type="file" class="form-control-file my-3" id="profileImage"
                                                        name="image">

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="fullName"
                                                value="<?php echo e(auth()->user()->name ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label"> Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" class="form-control" id="email"
                                                value="<?php echo e(auth()->user()->email ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="school_name" class="col-md-4 col-lg-3 col-form-label"> School
                                            Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="school_name" type="text" class="form-control"
                                                id="school_name" value="<?php echo e(auth()->user()->school_name ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="class" class="col-md-4 col-lg-3 col-form-label"> Class</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="class" type="text" class="form-control" id="class"
                                                value="<?php echo e(auth()->user()->class ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="gender" class="col-md-4 col-lg-3 col-form-label"> Gender</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="gender" type="text" class="form-control" id="gender"
                                                value="<?php echo e(auth()->user()->gender ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="phone_no" class="col-md-4 col-lg-3 col-form-label"> Phone
                                            No</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone_no" type="text" class="form-control" id="phone_no"
                                                value="<?php echo e(auth()->user()->phone_no ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="present_address" class="col-md-4 col-lg-3 col-form-label"> Present
                                            Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="present_address" type="text" class="form-control"
                                                id="present_address" value="<?php echo e(auth()->user()->present_address ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="division" class="col-md-4 col-lg-3 col-form-label">
                                            Division</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="division" type="text" class="form-control" id="division"
                                                value="<?php echo e(auth()->user()->division ?? ''); ?>">
                                        </div>
                                    </div>

                                    <div class="text-center float-end">
                                        <button type="submit" class="btn btn-success mt-3 text-white">
                                            <i class="fa-solid fa-floppy-disk"></i> Save
                                        </button>
                                    </div>

                                </form>
                                <!-- End Profile Edit Form -->

                            </div>

                            
                            <div class="tab-pane fade profile-change-password pt-3" id="profile-change-password">
                                <form action="<?php echo e(route('student.profile.password.update', auth()->user()->id)); ?>"
                                    method="POST">
                                    <?php echo csrf_field(); ?>

                                    <div class="row mb-3">
                                        <label for="new_password" class="col-md-4 col-lg-3 col-form-label"> New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password" type="password" class="form-control"
                                                id="new_password" >
                                                <?php if($errors->has('new_password')): ?>
                                                <span class="text-danger"><?php echo e($errors->first('new_password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="con-pass" class="col-md-4 col-lg-3 col-form-label"> Confirm Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password_confirmation" type="password" class="form-control" id="new_password_confirmation">

                                        </div>
                                        <div></div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="old-pass" class="col-md-4 col-lg-3 col-form-label"> Old Password
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="old_password" type="password" class="form-control"
                                                id="old-pass" value="">
                                        </div>
                                    </div>

                                    <div class="text-center float-end">
                                        <button type="submit" class="btn btn-success mt-3 text-white">
                                            <i class="fa-solid fa-floppy-disk"></i> Save
                                        </button>
                                    </div>
                                </form>
                                

                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php echo $__env->make('backend.layouts.partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/student/student-profile.blade.php ENDPATH**/ ?>