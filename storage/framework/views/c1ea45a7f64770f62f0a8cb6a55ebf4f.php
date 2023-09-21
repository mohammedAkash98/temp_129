<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-PUSHTI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <?php echo $__env->make('backend.layouts.partials.cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php echo $__env->make('home_page.home_page_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="cloud-bg mx-auto mx-auto">

    
    <div class="preload" data-preaload>
        <div class="circle" id="circle"></div>
        <p class="text">E-Pushti</p>
    </div>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('home_page.home_page_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->


    <section class="banner" id="home_section">
        <div class="banner-in position-relative w-100">
            <div class="svg position-absolute w-100">
                <img src="<?php echo e(asset('assets/icon/wave2.svg')); ?>" class="w-100" alt="">
            </div>

            <div class="container pt-6">
                <div class="row align-items-center">
                    <div class="col-md-6 pe-4">
                        <div class="text">
                            <h1 class="mb-3 header-font text-white">ই-পুষ্টি প্লাটফর্মে স্বাগতম</h1>
                            <p class="mb-3 header-font-p text-white">পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা বিষয়ে কিশোরকিশোরী
                                ও
                                তরুণদের সচেতনতা, জ্ঞান,
                                দক্ষতা এবং নেতৃত্ব সৃষ্টির জন্য তথ্য-প্রযুক্তি ভিত্তিক একটি উদ্যোগ হল ই-পুষ্টি। এই
                                প্লাটফর্মে
                                পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা বিষয়ক তথ্য, শিক্ষা কার্যক্রম এবং বিভিন্ন উপকরণ সকলের
                                ব্যবহারে
                                বিড ফাউন্ডেশন বিভিন্ন সরকারী প্রতিষ্ঠান, উন্নয়ন সংস্থা এবং বেসরকারি খাতের সহযোগিতায়
                                নিউদ্রিশন
                                ক্লাবের মাধ্যমে ই-পুষ্টি কার্যক্রম পরিচালনা করবে। বিভিন্ন শিক্ষা প্রতিষ্ঠানে স্থাপিত
                                ডিজিটাল
                                ল্যাব সমূহে এবং মোবাইল ফোনের মাধ্যমে এই কার্যক্রমে অংশ নিতে পারবে। নিয়মিত শিক্ষা
                                কার্যক্রমের
                                পাশাপাশি শিক্ষার্থীদের পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা সম্পর্কে প্রয়োজনীয় তথ্য এবং
                                প্রশিক্ষণের উদ্দেশ্যে অনলাইন ভিত্তিক বিভিন্ন কার্যক্রম “ই-পুষ্টি” পরিচালিত হবে।
                            </p>
                        </div>

                    </div>
                    <div class="col-md-6 ps-4">
                        <img src="<?php echo e(asset('assets/img/Characters/16.png')); ?>" class="w-100" alt="">
                    </div>
                </div>

                <div class="course-video my-3">
                    <!-- Button trigger modal -->
                    <a href="#" class="btn btn-bg text-dark mb-3 d-flex align-items-center">
                        <img src="<?php echo e(asset('assets/icon/youtube.png')); ?>" class="me-2" style="width: 35px"
                            alt="">
                        <h5 class="m-0"> <b>আমাদের কোর্সসমূহ দেখুন</b> </h5>
                    </a>

                </div>
            </div>
        </div>
    </section>

    
    <section class="platform position-relative mb-10" style="margin-top: 25%" id="platform">
        
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <h1 class="header-font">
                        ই-পুষ্টি প্লাটফর্মে কি কি আছে?
                    </h1>
                    <div class="d-flex justify-content-start">
                        <div class="mb-4 line-design d-grid text-center">
                            <span class="line line-h1"></span>
                            <span class="line line-h2"></span>
                        </div>
                    </div>
                    <ul class="header-font-p">
                        <li>অনলাইন কোর্স</li>
                        <li>লাইব্রেরী (তথ্য ও শিক্ষা উপকরণ)</li>
                        <li>ওয়েবিনার (বিষয়ভিত্তিক আলোচনা ও প্রশিক্ষণ)</li>
                        <li>ব্লগ (ভিডিও)</li>
                        <li>নিউট্রিশন ক্লাব বিষয়ক তথ্য</li>
                    </ul>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">

                    <a href="#" class="text-center">
                        <div class="col">
                            <img src="<?php echo e(asset('images/home_content/chapter_1.jpeg')); ?>"
                                class="card-img-top mb-3 w-100 rounded-4" alt="...">
                        </div>

                        <div class="card-body">
                            <button type="button" class="btn btn-bg text-dark header-font-p"> <b>শুরু করুন</b>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="course position-relative mb-10">
        
        <div class="container">
            <h1 class="text-center header-font">
                আমাদের অধ্যায়সমূহ
            </h1>
            <div class="d-flex justify-content-center">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            <div class="row align-items-center justify-content-center header-font-p">

                <?php for($i = 1; $i <= 5; $i++): ?>
                    <div
                        class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                        <a href="#">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title header-font">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                    <button type="button" class="btn btn-bg text-dark"> <b>বিস্তারিত</b></button>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>

            </div>
        </div>
    </section>

    
    <section class="adviser position-relative mb-10 bg-danger" id="adviser_team">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5 header-font">
                আমাদের উপদেষ্টা
            </h2>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carousalAdviser" class="carousel slide carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousalAdviser" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>

                </div>

                <div class="carousel-inner py-4">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 3; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center adviser-content">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="<?php echo e(asset('assets/img/adviser/mosud_mannan.jpg')); ?>"
                                                class="rounded card-img-top w-100" alt="...">
                                        </div>

                                        <div class="card-text my-3">
                                            <h3 class="name header-font">Mr. Masud Mannan</h3>
                                            <h6 class="title header-font">Ex-Ambessedor, Government of Bangladesh</h6>
                                        </div>

                                        <div class="row mx-3 mb-4 icon">
                                            <span class="col"><i class="fa-brands fa-facebook"></i></span>
                                            <span class="col"><i class="fa-brands fa-instagram"></i></span>
                                            <span class="col"><i class="fa-brands fa-square-twitter"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>

                
                <button class="carousel-control-prev" type="button" data-bs-target="#carousalAdviser"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                
                <button class="carousel-control-next" type="button" data-bs-target="#carousalAdviser"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>

        
        <div class="container pb-5">
            <h2 class="text-center text-white pt-5 header-font">
                আমাদের টীম মেম্বার
            </h2>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carousalTeam" class="carousel slide carousel-dark slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousalTeam" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousalTeam" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner py-4">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 3; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center team-content">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="<?php echo e(asset('assets/img/team_members/jubayer.jpeg')); ?>"
                                                class="rounded card-img-top w-100" alt="...">
                                        </div>

                                        <div class="card-text my-3">
                                            <h3 class="name header-font">Shahid Uddin Akbar</h3>
                                            <h6 class="title header-font">CEO & Founder , BIID Foundation
                                            </h6>
                                        </div>

                                        <div class="row mx-3 mb-4 icon">
                                            <span class="col"><i class="fa-brands fa-facebook"></i></span>
                                            <span class="col"><i class="fa-brands fa-instagram"></i></span>
                                            <span class="col"><i class="fa-brands fa-square-twitter"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 3; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center team-content">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-img">
                                            <img src="<?php echo e(asset('assets/img/team_members/jubayer.jpeg')); ?>"
                                                class="rounded card-img-top w-100" alt="...">
                                        </div>

                                        <div class="card-text my-3">
                                            <h3 class="name header-font">Shahid Uddin Akbar</h3>
                                            <h6 class="title header-font">CEO & Founder , BIID Foundation
                                            </h6>
                                        </div>
                                        <div class="row mx-3 mb-4 icon">
                                            <span class="col"><i class="fa-brands fa-facebook"></i></span>
                                            <span class="col"><i class="fa-brands fa-instagram"></i></span>
                                            <span class="col"><i class="fa-brands fa-square-twitter"></i></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>

                
                <button class="carousel-control-prev" type="button" data-bs-target="#carousalTeam"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                
                <button class="carousel-control-next" type="button" data-bs-target="#carousalTeam"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>


        </div>
    </section>

    
    <section class="about-us position-relative mb-10" id="about_us">
        
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <h1 class="header-font">
                        আমাদের সম্পর্কে
                    </h1>
                    <div class="d-flex justify-content-start">
                        <div class="mb-4 line-design d-grid text-center">
                            <span class="line line-h1"></span>
                            <span class="line line-h2"></span>
                        </div>
                    </div>
                    <p class="header-font-p">
                        বিআইআইডি ফাউন্ডেশন, ই-পুষ্টি দ্বারা প্রতিষ্ঠিত পুষ্টির জন্য একটি অনলাইন লার্নিং প্ল্যাটফর্ম
                        কেন্দ্রিক জ্ঞান, তথ্য, ভান্ডার, জাতীয় সংগঠন।
                    </p>
                    <a href="#" class="header-font">বিস্তারিত</a>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <div class="card-img">
                        <img src="<?php echo e(asset('assets/img/Screenshot_9_1.png')); ?>" class="card-img-top w-75 rounded-4"
                            alt="...">
                    </div>

                </div>
            </div>
            
        </div>
    </section>

    
    <section class="about-BIID position-relative mb-10" id="about_biid">
        
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <div class="card-img">
                        <img src="<?php echo e(asset('assets/img/biid.png')); ?>" class="card-img-top w-75 rounded-4"
                            alt="...">
                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <h1 class="header-font">
                        বিআইআইডি ফাউন্ডেশন সম্পর্কে
                    </h1>
                    <div class="d-flex justify-content-start">
                        <div class="mb-4 line-design d-grid text-center">
                            <span class="line line-h1"></span>
                            <span class="line line-h2"></span>
                        </div>
                    </div>
                    <p class="header-font-p">
                        বিআইআইডি ফাউন্ডেশন, একটি সামাজিক উদ্যোগ, যা টেকসই উন্নয়নের লক্ষ্যে সরকারী এবং বেসরকারি
                        প্রতিষ্ঠান এবং উদ্যোগের সাথে যৌথভাবে কৃষি, পুষ্টি, ও উদ্যোক্তা উন্নয়ন সংক্রান্ত কার্যক্রম
                        পরিচালনা করছে। বিআইআইডি তথ্য-প্রযুক্তি ভিত্তিক সেবা প্রদানের মাধ্যমে পুষ্টি খাতে কিশোর-কিশোরী ও
                        তরুণদের সক্ষমতা বৃদ্ধি এবং নেতৃত্ব বিকাশ, তরুণ উদ্যোক্তাদের দক্ষতা বৃদ্ধি, কৃষি সম্প্রসারণ
                        কার্যক্রম আধুনিকায়নে বিভিন্ন কার্যক্রম পরিচালনা করে থাকে। বিআইআইডি এর অন্যতম উদ্যোগ সমূহ হল:
                        নিউট্রিশন ক্লাব, ইন্টারন্যাশনাল নিউদ্রিশন অলিম্পিয়াড, ই- কৃষক, বি-ল্যাব, নির্ভয়া। বিআইআইডি
                        ফাউন্ডেশন সকল কার্যক্রমে উদ্ভাবনী কৌশল অনুশীলনের আয়োজন করে থাকে।
                    </p>
                    <a href="#" class="header-font">বিস্তারিত</a>
                </div>


            </div>
            
        </div>
    </section>

    
    <section class="club position-relative mb-10" id="club">
        
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <h1 class="header-font">
                        নিউট্রিশন ক্লাব
                    </h1>
                    <div class="d-flex justify-content-start">
                        <div class="mb-4 line-design d-grid text-center">
                            <span class="line line-h1"></span>
                            <span class="line line-h2"></span>
                        </div>
                    </div>
                    <p class="header-font-p">
                        পুষ্টিসযদ্ধ বাংলাদেশ গড়ার লক্ষ্যে <b>বাংলাদেশ ইনস্টিটিউট অফ আইসিটি ইন ডেভেলপমেন্ট (BIID)</b> এর
                        উদ্যোগে ২০১৫ সালে নিউটিশন ক্লাব গঠনের উদ্যোগ গ্রহণ করা হয়। কিশোর কিশোরী, এবং তরুণদের অংশগ্রহণ,
                        নেতৃত্ব প্রদান, খাদ্য নিরাপত্তা, পুষ্টি কার্যক্রম সঠিকভাবে পরিচালনার জন্য নিউটিশন ক্লাব কাজ করে
                        । ২০১৭ সাল থেকে কিশোর কিশোরী
                    </p>
                    <a href="#" class="header-font">বিস্তারিত</a>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 my-3 fadeInUp">
                    <div class="card-img">
                        <img src="<?php echo e(asset('assets/img/nutrition_club.png')); ?>" class="card-img-top w-75 rounded-4"
                            alt="...">
                    </div>

                </div>
            </div>
            
        </div>
    </section>

    
    <section class="feed position-relative my-10" id="feed">
        
        <div class="container text-center py-5">
            <h1 class="header-font">
                ফিড দ্যা ফিউচার বাংলাদেশ নিউট্রিশন অ্যাক্টিভিটি
            </h1>
            <p class="header-font-p">
                USAID এর অর্থায়নে <b>“ফিড দ্য ফিউচার বাংলাদেশ নিউট্রিশন অ্যাক্টিভিটি”</b> কিশোর ও কিশোরীদের
                ক্ষমতায়নের মাধ্যমে পুষ্টি, নিরাপদ পানি, হোম হাইজিন বা পারিবারিক স্বাস্থ্যবিধি, মাসিক
                ব্যবস্থাপনা,
                লিঙ্গ ভিত্তিক সহিংসতা ও বাল্যবিবাহ প্রতিরোধ, খাদ্য নিরাপত্তা, খাদ্য ক্ষতি ও ব্যবধান রোধ, নেতৃত্ব
                এ সকল
                বিষয় সম্বন্ধে কিশোর-কিশোরীদের অবহিতকরণের মাধ্যমে বাস্তব জীবনে এসকল বিষয় সমূহ চর্চা করে
                সার্বিক পারিবারিক ও সামাজিক উন্নয়নের জন্য কাজ করে যাচ্ছে।
            </p>
            <a href="#" class="header-font">বিস্তারিত</a>
        </div>
    </section>

    
    <section class="gallery position-relative my-10 bg-danger">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5 header-font">
                গ্যালারী এবং কার্যপদক্ষেপ
            </h2>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carouselExampleIndicators" class="carousel slide carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner py-4">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 6; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center gallery-item">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo e(asset('assets/img/gallery/gallary1.jpeg')); ?>"
                                            class="rounded card-img-top w-100" alt="...">

                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 6; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center gallery-item">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo e(asset('assets/img/gallery/gallary1.jpeg')); ?>"
                                            class="rounded card-img-top w-100" alt="...">

                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>

                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>

    
    <section class="webiner position-relative mb-10">
        
        <div class="container">
            <h1 class="text-center pt-5 header-font">
                আমাদের ওয়েবিনার
            </h1>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carousalWebiner" class="carousel slide carousel-dark slide header-font-p">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousalWebiner" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousalWebiner" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner py-4">
                    <div class="carousel-item active">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 3; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center webiner-content">
                                    <div class="card card-border rounded-4" style="width: 18rem;">
                                        <img src="<?php echo e(asset('assets/img/webiner/web1.jpg')); ?>"
                                            class="card-img-top rounded-4 mb-3" alt="...">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-bg text-dark"> <b>শুরু
                                                    করুন</b></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center justify-content-center mb-4">

                            <?php for($i = 1; $i <= 3; $i++): ?>
                                <div
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center webiner-content">
                                    <div class="card rounded-4 card-border" style="width: 18rem;">
                                        <img src="<?php echo e(asset('assets/img/webiner/web1.jpg')); ?>"
                                            class="card-img-top rounded-4 mb-3" alt="...">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-bg text-dark"> <b>শুরু
                                                    করুন</b></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>

                
                <button class="carousel-control-prev" type="button" data-bs-target="#carousalWebiner"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                
                <button class="carousel-control-next" type="button" data-bs-target="#carousalWebiner"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>


        </div>
    </section>

    
    <section class="certified-ack mb-10">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h1 class="mb-3 header-font">স্বীকৃতি</h1>
                    
                    <p class="header-font-p">BIID Foundation এর প্রধান নির্বাহী কর্মকর্তা- <b>শহীদ উদ্দিন আকবরের
                            নেতৃত্বে, খানসা রহমান,
                            জান্নাতুল
                            মিম, কাজি মাহবুবুল আলম</b> সমন্বয়ে গঠিত <b>BIID Foundation টিম ও BTRH Technology &
                            Innovation টিম</b>
                        যৌথভাবে ই-পুষ্টি প্লাটফর্মটির তথ্য উপাত্ত, গঠন কাঠামো পর্যালোচনা ও সংস্করণ করেন।
                        ই-পুষ্টি প্লাটফর্মের পর্যবেক্ষণ প্রক্রিয়া এবং সার্বিক সহযোগিতায় সকল উপদেষ্টামণ্ডলী, সহযোগী
                        সংস্থা- <b>GoB,
                            USAID, Abt Assoiciates</b> সহ সকল সহযোগী সংস্থার প্রতি <b>BIID Foundation</b> আন্তরিকভাবে
                        কৃতজ্ঞতা জ্ঞাপন
                        করছে।</p>
                </div>
                <div class="col-md-6 text-center">
                    <h1 class="mb-3 header-font">বিবৃতি</h1>
                    
                    <p class="header-font-p">এই প্র্যাটফর্মের সকল তথ্য/ বিষয়াদির দায়ভার <b>BIID</b> ফাউন্ডেশন এর।
                        ব্যবহৃত তথ্য অনুমতি
                        সাপেক্ষে
                        ব্যবহারযোগ্য। এখানে প্রকাশিত মতামতের সাথে বাংলাদেশ সরকার, ইউএসআইডি বা যুক্তরাষ্ট্রের সরকার এবং
                        অন্যান্য সহযোগী সংস্থার মতামতের মিল নাও থাকতে পারে।</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Footer ======= -->
    <?php echo $__env->make('home_page.home_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php echo $__env->make('home_page.home_page_script_cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home_page.home_page_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH F:\xampp\htdocs\129_2\temp_129\resources\views/home_page/home_page.blade.php ENDPATH**/ ?>