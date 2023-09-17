<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Team</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('team.index')); ?>">Team</a></li>
        <li class="breadcrumb-item active">Edit Team</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Team</h2>
    <form action="<?php echo e(route('team.update',$team->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Name:</label>
                <input type="text" value="<?php echo e($team->name); ?>" class="form-control" id="name" name="name" >
              </div>
          <div class="col-md-12">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
          </div>

           <div class="col-md-12">
            <label for="designation">Designation:</label>

            <input type="text" value="<?php echo e($team->designation); ?>" class="form-control" id="designation" name="designation">
           </div>


           <div class="col-md-12">
            <label for="facebook_url">Facebook URL:</label>
            <input type="text" value="<?php echo e($team->facebook_url); ?>" class="form-control" id="facebook_url" name="facebook_url" >
           </div>


           <div class="col-md-12">
            <label for="instagram_url">Instagram URL:</label>
            <input type="text" value="<?php echo e($team->instagram_url); ?>" class="form-control" id="instagram_url" name="instagram_url" >
           </div>

           <div class="col-md-12">
            <label for="twitter_url">Twitter URL:</label>
            <input type="text" value="<?php echo e($team->twitter_url); ?>" class="form-control" id="twitter_url" name="twitter_url" >
           </div>


        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>
<?php echo $__env->make('backend.layouts.partials.ckeditor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/backend/team/team-edit.blade.php ENDPATH**/ ?>