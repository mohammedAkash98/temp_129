<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('user.index')); ?>">User</a></li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->
<div class="container">
    <h2>Registration Form</h2>
    <form action="<?php echo e(route('user.store')); ?>" method="POST">
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/backend/user/user-create.blade.php ENDPATH**/ ?>