<?php $__env->startSection('page_content'); ?>
    <style>
        /* Custom CSS for the certificate design */
    </style>

    <div class="container certificate-container text-center">
        <div class="certificate">
            <img src="<?php echo e(asset('images/Certificate/certificate-border.png')); ?>" class="certifiate-border"
                alt="Certificate Border">

            <img src="<?php echo e(asset('images/Certificate/BIID-logo.png')); ?>" class="BIID-logo position-absolute" alt="">

            <div class="certificate-content m-3">
                <img src="<?php echo e(asset('assets/img/Screenshot_9_1.png')); ?>" class="e-pushti-logo" style="width: 16%;" alt="">
                <h1 class="py-3">Certificate of Appreciation</h1>
                <h3 class="username py-2"><?php echo e(auth()->user()->name ?? 'Your Name'); ?></h3>
                <p class="" style="font-size: 12px; margin: auto 18%;">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quas qui delectus vel numquam
                    reprehenderit
                    explicabo ipsum maxime optio molestiae consectetur? Dolor veritatis molestias voluptatibus laborum
                    quaerat
                    animi dolorem repellat omnis?</p>

                <table class="table table-borderless my-5">
                    <tbody>
                        <tr class="text-center " style="font-size: 12px;">
                            <td>
                                <h6>Manager Signature</h6>
                                <div class="line-1 mb-3"></div>
                                <h6>Manager Name</h6>
                                <Strong>Manager</Strong>
                            </td>
                            <td>
                                <h6>Assistant Signature</h6>
                                <div class="line-1 mb-3"></div>
                                <h6>Assistant Name</h6>
                                <Strong>Assistant</Strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="certificate-content pb3-">কৈশোরকালীন পুষ্টি ও সাস্থ্যসম্মত জীবনধারা</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/certificate.blade.php ENDPATH**/ ?>