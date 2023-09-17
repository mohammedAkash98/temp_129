<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('user.index')); ?>">User</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->

  <form action="<?php echo e(route('user.update',$user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="is_class_member">Class Member:</label>
    <select class="form-control" name="is_class_member" id="is_class_member">
        <option value="" selected disabled> Select One</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>

    <br>
    <label for="type">User Type:</label>
    <select class="form-control" name="type" id="type">
        <option value="" selected disabled> Select One</option>
        <option value="admin">Admin</option>
        <option value="student">Student</option>
    </select>
    <br>

    <label for="enrolled">Enrolled:</label>
   <input name="enrolled" type="text" class="form-control" value="<?php echo e($user->enrolled ?? ''); ?>">

    <br>

    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Save</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/user/user-edit.blade.php ENDPATH**/ ?>