<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Pushti</title>

        <?php echo $__env->make('frontend.layouts.header_link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('page_css'); ?>

    </head>
    <body class="antialiased">
        
        <?php echo $__env->make('frontend.layouts.header_design', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('page_content'); ?>
    
    </body>
    
    <?php echo $__env->make('frontend.layouts.header_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('page_js'); ?>
</html>
<?php /**PATH G:\laragon\www\e-pushti-laravel\resources\views/main_master.blade.php ENDPATH**/ ?>