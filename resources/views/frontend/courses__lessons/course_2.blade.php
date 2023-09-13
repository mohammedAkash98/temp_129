@extends('main_master')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/course.css') }}">
@endsection

@section('page_content')
    <div class="container">

        <!-- upper navbar -->
        <nav class="navbar navbar-expand-lg bg-light mb-3 mt-3 top-nav">
            <div class="navbar-collapse" id="navbarNav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('courses')}}" class="text-dark font-weight-bold">Course</a></li>
                        <li class="breadcrumb-item text-dark" aria-current="page">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত
                            জীবনধারা</li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="row m-0">

            <!-- side navbar -->
            <nav id="sidebar" class="col-md-4 col-lg-4 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">

                            <!-- main side navbar -->
                            <a class="nav-link text-dark font-weight-bold" id="sidebar-arrow" data-toggle="collapse"
                                href="#collapseSideSubNav" role="button" aria-expanded="false"
                                aria-controls="collapseSideSubNav">
                                <div class="arrow" id="arrow"></div>
                                অধ্যায়-১: খাদ্য ও পুষ্টি
                            </a>

                            <!-- sub navbar -->
                            <div class="collapse" id="collapseSideSubNav" style="margin-left: 30px;">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link" id="v-pills-1-1-tab" data-toggle="pill" href="#v-pills-1-1"
                                        role="tab" aria-controls="v-pills-1-1" aria-selected="true">
                                        <span><img src="{{ asset('assets/icon/right_in _round_Ash.png') }}"
                                                alt=""></span>
                                        পাঠ-১: খাদ্য ,পুষ্টি ,পুষ্টিকর খাবার কি
                                    </a>
                                    <a class="nav-link" id="v-pills-1-2-tab" data-toggle="pill" href="#v-pills-1-2"
                                        role="tab" aria-controls="v-pills-1-2" aria-selected="false">
                                        <span><img src="{{ asset('assets/icon/right_in _round_Ash.png') }}"
                                                alt=""></span>
                                        পাঠ-২: খাদ্যের উপাদান ও এদের উৎস সমূহ</a>
                                    <a class="nav-link" id="v-pills-1-3-tab" data-toggle="pill" href="#v-pills-1-3"
                                        role="tab" aria-controls="v-pills-1-3" aria-selected="false">
                                        <span><img src="{{ asset('assets/icon/right_in _round_Ash.png') }}"
                                                alt=""></span>
                                        পাঠ-৩: সুষম খাবার কি , সুষম খাবার খাওয়ার প্রয়োজনীয়তা</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" id="sidebar-arrow" href="#">
                                <div class="arrow" id="arrow"></div>
                                অধ্যায়-২: স্বাস্থ্যসম্মত জীবনধারা
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" id="sidebar-arrow" href="#">
                                <div class="arrow" id="arrow"></div>
                                অধ্যায়-৩: মানসিক স্বাস্থ্য
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" id="sidebar-arrow" href="#">
                                <div class="arrow" id="arrow"></div>
                                অধ্যায়-৪: নেতৃত্ব
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" id="sidebar-arrow" href="#">
                                <div class="arrow" id="arrow"></div>
                                অধ্যায়-৫: সামাজিক ক্ষেত্র
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-8 col-lg-8 ms-sm-auto px-md-4">
                <div class="tab-content" id="v-pills-tabContent">

                    <!-- lesson 1.1 -->
                    <div class="tab-pane fade show" id="v-pills-1-1" role="tabpanel" aria-labelledby="v-pills-1-1-tab">
                        <div class="col-12" id="div1">
                            <div class="card border-0">

                                <img src="{{asset("assets/img/lesson1.jpg")}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h3 class="mb-3"><b>খাদ্য, পুষ্টি, পুষ্টিকর খাবার কি</b></h3>
                                    <p class="card-text mb-3">
                                        কৈশোরকালে শরীরের দ্রুত বৃদ্ধি ঘটে। দেহ বৃদ্ধি বিশেষ করে শরীরের কাঠামোগত বৃদ্ধির
                                        জন্য এসময় যথেষ্ট পরিমাণ পুষ্টিকর ও সুষম খাবার গ্রহণ করা প্রয়োজন । এসময় দেহের
                                        চাহিদা অনুযায়ী পুষ্টিকর খাবার না খেলে শারীরিক বৃদ্ধি অ মানসিক পরিপক্বতা সঠিকভাবে
                                        গড়ে উঠেনা। কৈশোরকালীন এই সময়কে Missed Opportunities বলে কারণ শিশুকালে যদি শরিরে
                                        পুষ্টির কোন ঘাটতি থাকে তা এসময় পূরণ করা সম্ভব । তাই এই সময়টি পুষ্টিগত অবস্থা
                                        উন্নয়নের জন্য একটা শেষ সুযোগ।
                                        <a class="text-dark" data-toggle="collapse" href="#collapseExample1_1"
                                            role="button" aria-expanded="false" aria-controls="collapseExample1_1">
                                            <b> পাঠ সম্পর্কিত তথ্য</b>
                                        </a>
                                    </p>

                                    <div class="collapse mb-3" id="collapseExample1_1">
                                        <h4 class="mb-3"><b>খাদ্য</b></h4>
                                        <p class="card-text mb-3">
                                            খাদ্য হচ্ছে এমন কতকগুলো প্রয়োজনীয় উপাদানের সমষ্টি যা গ্রহণের মাধ্যমে
                                            শরীরের স্বাভাবিক বৃদ্ধি ও কর্মক্ষমতা বজায় থাকে, ক্ষয়পূরণ ও বিভিন্নভাবে
                                            কাজের জন্য প্রয়োজনীয় শক্তির যোগান দেয়, এবং সর্বোপরি রোগ প্রতিরোধ ক্ষমতা
                                            তৈরী করে।
                                        </p>

                                        <h4 class="mb-3"><b>পুষ্টি</b></h4>
                                        <p class="card-text mb-3">
                                            পুষ্টি হচ্ছে এমন একটি প্রক্রিয়া যার মাধ্যমে গ্রহণ করা খাদ্য শোষিত হয়ে
                                            শরীরে তাপ ও শক্তি উৎপন্ন করে, শরীরের বৃদ্ধি সাধন করে এবং রোগ প্রতিরোধ ক্ষমতা
                                            সৃষ্টি করে। খাদ্যের সাথে স্বাস্থ্যের সম্পর্কই হল পুষ্টি। অর্থাৎ স্বাস্থ্য
                                            গঠনে খাদ্যের ভূমিকা অথবা খাদ্যের সাথে সুস্থ-সবল অ কর্মক্ষম স্বাস্থ্য গঠন এবং
                                            বজায় রাখার জন্য যে যোগসূত্র সে প্রক্রিয়াকে আমরা পুষ্টি বলি।
                                        </p>

                                        <h4 class="mb-3"><b>পুষ্টিকর খাদ্য</b></h4>
                                        <p class="card-text mb-3">
                                            যে সব খাদ্য খেলে শরীরে তাপ ও শক্তি উৎপাদিত হয, দেহের গঠন বৃদ্ধি হয়, শরীর
                                            সবল, কর্মক্ষম ও নিরোগ থাকে তাই পুষ্টিকর খাদ্য।
                                            খাদ্য ও পুষ্টি একে অপরের সাথে জড়িত। যে কোন খাদ্য গ্রহণ কলেই হবে না, তা
                                            অবশ্যই পুষ্টিকর ও নিরাপদ হতে হবে। পুষ্টিকর খাদ্য গ্রহণ কনা করলে রোগ প্রতিরোধ
                                            ক্ষমতা কমে যায় এবং শরীরে বিভিন্ন ধরনের রোগ হয়। পুষ্টিকর খাবার গ্রহণ করলে
                                            শরীর ও মন উভয়ই ভাল থাকে।
                                        </p>

                                    </div>

                                    <div class="float-right">
                                        <div class="d-flex align-items-center mb-2 mr-3">
                                            <small>
                                                <span class="mr-1 text-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15"
                                                        zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="15"
                                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                                        <defs>
                                                            <clipPath id="id1">
                                                                <path
                                                                    d="M 2.328125 4.222656 L 27.734375 4.222656 L 27.734375 24.542969 L 2.328125 24.542969 Z M 2.328125 4.222656 "
                                                                    clip-rule="nonzero" />
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#id1)">
                                                            <path fill="rgb(13.729858%, 12.159729%, 12.548828%)"
                                                                d="M 27.5 7.53125 L 24.464844 4.542969 C 24.15625 4.238281 23.65625 4.238281 23.347656 4.542969 L 11.035156 16.667969 L 6.824219 12.523438 C 6.527344 12.230469 6 12.230469 5.703125 12.523438 L 2.640625 15.539062 C 2.332031 15.84375 2.332031 16.335938 2.640625 16.640625 L 10.445312 24.324219 C 10.59375 24.472656 10.796875 24.554688 11.007812 24.554688 C 11.214844 24.554688 11.417969 24.472656 11.566406 24.324219 L 27.5 8.632812 C 27.648438 8.488281 27.734375 8.289062 27.734375 8.082031 C 27.734375 7.875 27.648438 7.679688 27.5 7.53125 Z M 27.5 7.53125 "
                                                                fill-opacity="1" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                আমি পাঠটি সম্পন্ন করেছি
                                            </small>
                                        </div>

                                        <button type="button" class="btn btn-sm btn-color float-right">নিজেকে যাচাই
                                            করুন</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- lesson 1.2 -->
                    <div class="tab-pane fade" id="v-pills-1-2" role="tabpanel" aria-labelledby="v-pills-1-2-tab">
                        <div class="col-12" id="div2">
                            <div class="card border-0">

                                <img src="{{asset("assets/img/lesson1.jpg")}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h3 class="mb-3"><b> খাদ্যের উপাদান ও এদের উৎস সমূহ</b></h3>
                                    <p class="card-text mb-3">
                                        খাদ্যের যে সব রাসাযনিক পদার্থ দেহের কাজ সুষ্ঠুভাবে সম্পন্ন করে সেগুলোই খাদ্য
                                        উপাদান নামে পরিচিত। খাদ্যের পুষ্টি উপাদনা ৬টি।

                                        <a class="text-dark" data-toggle="collapse" href="#collapseExample1_2"
                                            role="button" aria-expanded="false" aria-controls="collapseExample1_2">
                                            <b> পাঠ সম্পর্কিত তথ্য</b>
                                        </a>

                                    </p>

                                    <div class="collapse mb-3" id="collapseExample1_2">
                                        <h4 class="mb-3"><b>১. শ্বেতসার বা শর্করা</b></h4>
                                        <p class="card-text mb-3">
                                            ভাত রুটি আলু মুড়ি পাউরুটি মধু
                                            শ্বেতসার বা শর্করা জাতীয় খাবারের উৎস
                                            image
                                        </p>

                                        <h4 class="mb-3"><b>২. আমিষ</b></h4>
                                        <p class="card-text mb-3">
                                            মাছ মাংস ডিম ডাল বাদাম দুধ
                                            আমিষ জাতীয় খাবারের উৎস (Add pic)
                                        </p>

                                        <h4 class="mb-3"><b>৩. স্নেহ বা তেল</b></h4>
                                        <p class="card-text mb-3">
                                            ভোজ্য তেল মাখন ঘি
                                            স্নেহ বা তেল জাতীয় খাবারের উৎস (Add pic)
                                        </p>

                                        <h4 class="mb-3"><b>৪. ভিটামিন বা খাদ্যপ্রাণ</b></h4>
                                        <p class="card-text mb-3">
                                            দুধ কলিজা রঙীন শাক রঙীন সবজি ফল
                                            ভিটামিন জাতীয় খাবারের উৎস (Add pic)
                                        </p>

                                        <h4 class="mb-3"><b>৫. খনিজ লবণ</b></h4>
                                        <p class="card-text mb-3">
                                            কলিজা গাঢ় সবুজ ও রঙীন শাক-সবজি মাছ ফল
                                            খনিজ লবণ জাতীয় খাবারের উৎস (Add pic)

                                        </p>

                                        <h4 class="mb-3"><b>৬. পানি</b></h4>
                                        <p class="card-text mb-3">
                                            আর্সেনিকমুক্ত টিউবওয়েল পরিষ্কার-পরিচ্ছন্ন কুয়া
                                            পানির উৎস (Add pic)
                                        </p>

                                        <p class="mb-3">
                                            এই ৬টি উপাদান নির্দিষ্ট পরিমাণে ও সঠিক মাত্রায় আমাদের প্রতিদিনের খাদ্য
                                            তারিকায় থাকতে হবে। আমাদের প্রতিদিনের খাদ্যে এদের ঘাটতি হলে শরীরে ঐ নির্দিষ্ট
                                            উপাদানের ঘাটতিজনিত লক্ষণ প্রকাশ পায়। এ ঘাটতি বেশি দিন থাকলে মানুষ অসুস্থ হয়ে
                                            পড়ে।
                                        </p>

                                        <div class="">
                                            <h4 class="mb-3"><b> কাজ অনুযায়ী খাদ্যের শ্রেণীবিভাগ</b></h4>
                                            <ul class="list-none">

                                                <li class="mb-3">
                                                    <b>১. তাপ ও শক্তি উৎপাদনকারী খাদ্য: </b>
                                                    (শর্করা ও চর্বি জাতীয়) যেমন: ভাত, রুটি, আলু, গুড় মিষ্টিআলু, পাউরুটি,
                                                    তেল, মাখন, ঘি, চর্বি, মধু, বাদাম, নারিকেল ইত্যাদি।
                                                </li>
                                                <li class="mb-3">
                                                    <b>২. ক্ষয়পূরণ ও দেহ বৃদ্ধিকারী খাদ্য: </b>
                                                    (আমিষ জাতীয়) যেমন: মাছ (ছোটমাছ, বড়মাছ), মাংস, দুধ, ডিম, সয়াবিন, ডাল,
                                                    সিমের বীচি, কলিজা ইত্যাদি।
                                                </li>
                                                <li class="mb-3">
                                                    <b>৩. রোগ প্রতিরোধকারী খাদ্য: </b> (ভিটামিন ও খনিজ সমৃদ্ধ) যেমন: গাঢ়
                                                    হলুদ, সবুজ ও কমলা রঙের সব ধরনের শাক-সবজি ও ফলমূল, পাকা তাল, পাকা
                                                    পেঁপে, পাকা কাঁঠাল, আনারস, পেয়ারা, আমলকি, আমড়া, কলা, লেবু, গাজর,
                                                    মিষ্টিকুমড়া, শিম, ছোটমাছ, দুধ, ডিম, কলিজা ইত্যাদি।
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- button -->
                                    <div class="float-right">
                                        <div class="d-flex align-items-center mb-2 mr-3">
                                            <small>
                                                <span class="mr-1 text-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15"
                                                        zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="15"
                                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                                        <defs>
                                                            <clipPath id="id1">
                                                                <path
                                                                    d="M 2.328125 4.222656 L 27.734375 4.222656 L 27.734375 24.542969 L 2.328125 24.542969 Z M 2.328125 4.222656 "
                                                                    clip-rule="nonzero" />
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#id1)">
                                                            <path fill="rgb(13.729858%, 12.159729%, 12.548828%)"
                                                                d="M 27.5 7.53125 L 24.464844 4.542969 C 24.15625 4.238281 23.65625 4.238281 23.347656 4.542969 L 11.035156 16.667969 L 6.824219 12.523438 C 6.527344 12.230469 6 12.230469 5.703125 12.523438 L 2.640625 15.539062 C 2.332031 15.84375 2.332031 16.335938 2.640625 16.640625 L 10.445312 24.324219 C 10.59375 24.472656 10.796875 24.554688 11.007812 24.554688 C 11.214844 24.554688 11.417969 24.472656 11.566406 24.324219 L 27.5 8.632812 C 27.648438 8.488281 27.734375 8.289062 27.734375 8.082031 C 27.734375 7.875 27.648438 7.679688 27.5 7.53125 Z M 27.5 7.53125 "
                                                                fill-opacity="1" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                আমি পাঠটি সম্পন্ন করেছি
                                            </small>
                                        </div>

                                        <button type="button" class="btn btn-sm btn-color float-right">নিজেকে যাচাই
                                            করুন</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- lesson 1.3 -->
                    <div class="tab-pane fade" id="v-pills-1-3" role="tabpanel" aria-labelledby="v-pills-1-3-tab">
                        <div class="col-12" id="div3">
                            <div class="card border-0">

                                <img src="{{asset("assets/img/lesson1.jpg")}}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h3 class="mb-3"><b>সুষম খাবার কি, সুষম খাবার খাওয়ার প্রয়োজনীয়তা</b></h3>
                                    <h4 class="mb-3"><b>সুষম খাদ্য</b></h4>
                                    <p class="card-text mb-3">
                                        সুষম খাদ্য হচ্ছে সেই খাদ্য, যেখানে খাদ্যের সব পুষ্টি উপাদান দেহের প্রয়োজন মত
                                        বয়স, লিঙ্গ, কাজের ধরন, শারীরিক অবস্থা ভেদে সঠিক মাত্রায় থাকে। অর্থাৎ সুষম খাদ্য
                                        হলো এমন একটি খাবার যেখানে শক্তিদায়ক, শরীর বৃদ্ধিকারক রোগ প্রতিরাধক খাদ্য উপাদান
                                        পরিমান মত রয়েছে। বেশি খরচ করে যেমন সুষম খাবার খাওয়া যায়, তেমনি অল্প খরচেও সুষম
                                        খাবার খাওয়া যায়।
                                        <a class="text-dark" data-toggle="collapse" href="#collapseExample1_3"
                                            role="button" aria-expanded="false" aria-controls="collapseExample1_3">
                                            <b> পাঠ সম্পর্কিত তথ্য</b>
                                        </a>


                                    <div class="collapse mb-3" id="collapseExample1_3">
                                        <h4 class="mb-3"><b>সুষম খাদ্যের প্রয়োজনীয়তা</b></h4>
                                        <ul>
                                            <li>
                                                কৈশোরে শরীরের দ্রুত বৃদ্ধির জন্য।
                                            </li>
                                            <li>
                                                শরীরের কাঠামোগত বৃদ্ধির জন্য।
                                            </li>
                                            <li>
                                                শরীরে গ্রোথ হরমোন নামক এক বিশেষ হরমোন বেশি করে তৈরি হয় যা দ্রুত বৃদ্ধির কাজ
                                                করে।
                                            </li>
                                            <li>
                                                দেহের চাহিদা মাফিক পুষ্টিকর ও সুষম খাবার না পেলে শরীরের বৃদ্ধি পুরোপুরি হয়
                                                না।
                                            </li>
                                        </ul>
                                        <p>ছেলেমেয়েদের এই সময়কার পুষ্টির উপর নির্ভর করে তাদের শারীরিক উচ্চতা বৃদ্ধি।</p>
                                    </div>

                                    <div class="float-right">
                                        <div class="d-flex align-items-center mb-2 mr-3">
                                            <small>
                                                <span class="mr-1 text-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15"
                                                        zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="15"
                                                        preserveAspectRatio="xMidYMid meet" version="1.0">
                                                        <defs>
                                                            <clipPath id="id1">
                                                                <path
                                                                    d="M 2.328125 4.222656 L 27.734375 4.222656 L 27.734375 24.542969 L 2.328125 24.542969 Z M 2.328125 4.222656 "
                                                                    clip-rule="nonzero" />
                                                            </clipPath>
                                                        </defs>
                                                        <g clip-path="url(#id1)">
                                                            <path fill="rgb(13.729858%, 12.159729%, 12.548828%)"
                                                                d="M 27.5 7.53125 L 24.464844 4.542969 C 24.15625 4.238281 23.65625 4.238281 23.347656 4.542969 L 11.035156 16.667969 L 6.824219 12.523438 C 6.527344 12.230469 6 12.230469 5.703125 12.523438 L 2.640625 15.539062 C 2.332031 15.84375 2.332031 16.335938 2.640625 16.640625 L 10.445312 24.324219 C 10.59375 24.472656 10.796875 24.554688 11.007812 24.554688 C 11.214844 24.554688 11.417969 24.472656 11.566406 24.324219 L 27.5 8.632812 C 27.648438 8.488281 27.734375 8.289062 27.734375 8.082031 C 27.734375 7.875 27.648438 7.679688 27.5 7.53125 Z M 27.5 7.53125 "
                                                                fill-opacity="1" fill-rule="nonzero" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                আমি পাঠটি সম্পন্ন করেছি
                                            </small>
                                        </div>

                                        <button type="button" class="btn btn-sm btn-color float-right">নিজেকে যাচাই
                                            করুন</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="{{ asset('assets/js/course.js') }}"></script>
@endsection
