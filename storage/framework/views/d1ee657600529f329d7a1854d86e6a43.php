<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2>Registration Form</h2>
    <form action="<?php echo e(route('login.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>


        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile" name="phone_no" >
        </div>



        <!-- Password -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/user/login.blade.php ENDPATH**/ ?>