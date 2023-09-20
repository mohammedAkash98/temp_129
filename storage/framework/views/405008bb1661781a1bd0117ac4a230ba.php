<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-PUSHTI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    <!-- Favicons -->

    <?php echo $__env->make('backend.layouts.partials.cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php echo $__env->make('home_page.home_page_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="cloud-bg mx-auto">

    
    <div class="preload" data-preaload>
        <div class="circle" id="circle"></div>
        <p class="text">E-Pushti</p>
    </div>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('home_page.home_page_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->


    <section class="banner">
        <div class="banner-in position-relative w-100">
            <div class="svg position-absolute w-100">
                <img src="<?php echo e(asset('assets/icon/wave2.svg')); ?>" class="w-100" alt="">
            </div>

            <div class="container pt-6">
                <div class="row align-items-center">
                    <div class="col-md-6 pe-4">
                        <div class="text">
                            <h2 class="mb-3 header-font text-white">ই-পুষ্টি প্লাটফর্মে স্বাগতম</h2>
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

    <section class="course position-relative mt-20 mb-10">
        
        <div class="container">
            <h2 class="text-center">
                আমাদের কোর্সসমূহ
            </h2>
            <div class="d-flex justify-content-center">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('images/home_content/chapter_1.jpeg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা</h3>
                                <button type="button" class="btn btn-bg text-dark">শুরু করুন</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="course position-relative mt-5 mb-10">
        
        <div class="container">
            <h2 class="text-center">
                অধ্যায়সমূহ
            </h2>
            <div class="d-flex justify-content-center">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                <button type="button" class="btn btn-bg text-dark">বিস্তারিত</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                <button type="button" class="btn btn-bg text-dark">বিস্তারিত</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                <button type="button" class="btn btn-bg text-dark">বিস্তারিত</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                <button type="button" class="btn btn-bg text-dark">বিস্তারিত</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center fadeInUp">
                    <a href="#">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo e(asset('assets/img/lesson1.jpg')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">১ঃ খাদ্য ও পুষ্টি বিষয়ক তথ্য</h5>
                                <button type="button" class="btn btn-bg text-dark">বিস্তারিত</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="gallery position-relative my-5 bg-danger">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5">
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

    
    <section class="certified-ack my-10">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h2 class="mb-3">স্বীকৃতি</h2>
                    <hr>
                    <p>BIID Foundation এর প্রধান নির্বাহী কর্মকর্তা- <b>শহীদ উদ্দিন আকবরের নেতৃত্বে, খানসা রহমান,
                            জান্নাতুল
                            মিম, কাজি মাহবুবুল আলম</b> সমন্বয়ে গঠিত <b>BIID Foundation টিম ও BTRH Technology &
                            Innovation টিম</b>
                        যৌথভাবে ই-পুষ্টি প্লাটফর্মটির তথ্য উপাত্ত, গঠন কাঠামো পর্যালোচনা ও সংস্করণ করেন। <br>
                        ই-পুষ্টি প্লাটফর্মের পর্যবেক্ষণ প্রক্রিয়া এবং সার্বিক সহযোগিতায় সকল উপদেষ্টামণ্ডলী, সহযোগী
                        সংস্থা- <b>GoB,
                            USAID, Abt Assoiciates</b> সহ সকল সহযোগী সংস্থার প্রতি <b>BIID Foundation</b> আন্তরিকভাবে
                        কৃতজ্ঞতা জ্ঞাপন
                        করছে।</p>
                </div>
                <div class="col-md-6 text-center">
                    <h2 class="mb-3">বিবৃতি</h2>
                    <hr>
                    <p>এই প্র্যাটফর্মের সকল তথ্য/ বিষয়াদির দায়ভার <b>BIID</b> ফাউন্ডেশন এর। ব্যবহৃত তথ্য অনুমতি
                        সাপেক্ষে
                        ব্যবহারযোগ্য। এখানে প্রকাশিত মতামতের সাথে বাংলাদেশ সরকার, ইউএসআইডি বা যুক্তরাষ্ট্রের সরকার এবং
                        অন্যান্য সহযোগী সংস্থার মতামতের মিল নাও থাকতে পারে।</p>
                </div>
            </div>
        </div>
    </section>

    
    <section class="adviser position-relative my-5 bg-danger">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5">
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
                                        <img src="<?php echo e(asset('assets/img/adviser/mosud_mannan.jpg')); ?>"
                                            class="rounded card-img-top w-100" alt="...">
                                        <h3 class="my-3">Masud Mannan</h3>
                                        <div class="row mx-3 mb-3 icon">
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
    </section>

    
    <section class="team-members position-relative my-5 bg-danger">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5">
                আমাদের টীম মেম্বার
            </h2>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carousalTeam" class="carousel slide carousel-dark slide">
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
                                        <img src="<?php echo e(asset('assets/img/team_members/jubayer.jpeg')); ?>"
                                            class="rounded card-img-top w-100" alt="...">
                                        <h3 class="my-3">Jubayer</h3>
                                        <div class="row mx-3 mb-3 icon">
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
                                        <img src="<?php echo e(asset('assets/img/team_members/jubayer.jpeg')); ?>"
                                            class="rounded card-img-top w-100" alt="...">
                                        <h3 class="my-3">Jubayer</h3>
                                        <div class="row mx-3 mb-3 icon">
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

    
    <section class="webiner position-relative my-5 bg-danger">
        
        <div class="container py-5">
            <h2 class="text-center text-white pt-5">
                ওয়েবিনার
            </h2>
            <div class="d-flex justify-content-center pb-3">
                <div class="mb-4 line-design d-grid text-center">
                    <span class="line line-h1"></span>
                    <span class="line line-h2"></span>
                </div>
            </div>

            
            <div id="carousalWebiner" class="carousel slide carousel-dark slide">
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
                                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center d-flex justify-content-center team-content">
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php echo e(asset('assets/img/webiner/1.jpg')); ?>" class="card-img-top mb-3" alt="...">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-bg text-dark">শুরু করুন</button>
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
                                        <img src="<?php echo e(asset('assets/img/webiner/1.jpg')); ?>" class="card-img-top mb-3" alt="...">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-bg text-dark">শুরু করুন</button>
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

    <!-- ======= Footer ======= -->
    <?php echo $__env->make('home_page.home_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php echo $__env->make('home_page.home_page_script_cdn', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('home_page.home_page_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH G:\laragon\www\temp_129\resources\views/home_page/home_page.blade.php ENDPATH**/ ?>