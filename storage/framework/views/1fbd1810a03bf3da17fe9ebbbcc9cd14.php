<div class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(Route('dashboard')); ?>">
                <img src="<?php echo e(asset("assets/img/Screenshot_9_1.png")); ?>" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <?php if(!Auth::user()): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(Route('dashboard')); ?>">প্রবেশ করুন</a>
                    </li>
                <?php else: ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(Route('dashboard')); ?>">ড্যাশবোর্ড</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(Route('courses')); ?>">কোর্স</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(Route('video')); ?>">ভিডিও</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(Route('seminar')); ?>">সেমিনার</a>
                </li>
                <li class="nav-item">
                    
                    <div class="btn-group">
                        <button type="button" class="nav-link bg-light border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            রিসোর্স
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?php echo e(route('svcc.frontend.index')); ?>">SVCC</a>
                          <a class="dropdown-item" href="<?php echo e(route('activity.sheet.frontend.index')); ?>">Activity Sheet</a>
                          <a class="dropdown-item" href="#">Others</a>
                        </div>
                      </div>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Add a rounded image here -->
                        <img src="https://cdn.vectorstock.com/i/preview-1x/47/62/bangladesh-flag-in-glossy-round-button-of-icon-vector-22994762.jpg" alt="Language Flag" class="rounded-flag" height="50px" width="50px"> ভাষা
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        
                        <a class="dropdown-item" href="#">বাংলা</a>
                        <!-- Add more language options as needed -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php

                            $name = Auth::user()->name;
                            $words = explode(' ', $name);
                            $firstName = $words[0];
                            echo $firstName;

                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('student.profile')); ?>">My Profile</a>
                        <a class="dropdown-item" href="<?php echo e(route('student.certificate')); ?>">Certificate</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a>
                    </div>
                </li>
                <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH G:\laragon\www\temp_129\resources\views/frontend/layouts/header_design.blade.php ENDPATH**/ ?>