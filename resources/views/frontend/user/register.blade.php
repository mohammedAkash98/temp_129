@extends('main_master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@section('page_content')
{{-- registration --}}
    <section class="registrationPage mb-4">
        <div class="container mt-5">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                        <div class="content">
                            <h2 class="mb-3">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা</h2>
                            <p class="mb-3">
                                বিশ্ব স্বাস্থ্য সংস্থা এর সংজ্ঞা অনু্যায়ী ১০-১৯ বছর
                                বয়সসীমাকে কৈশোরকাল বা বয়ঃসন্ধিকাল বলা
                                হয়। এই সময়ে ছেলে-মেয়ে উভয়েরই শারীরিক
                                বৃদ্ধি ও মানসিক পরিবর্তন হয় এবং তারা
                                প্রজননক্ষম হয়। এই সময়ে কিশোরকিশোরীদের
                                সঠিক শারীরিক ও মানসিক বিকাশের জন্য
                                প্রয়োজনীয় পুষ্টিকর খাবার, শারীরিক কার্যক্রম,
                                ব্যক্তিগত পরিষ্কার-পরিচ্ছন্নতা এবং সৃজনশীল
                                কাজে অংশগ্রহণ করা অত্যন্ত জরুরি। এই
                                বিষয়গুলো সম্পর্কে সঠিক ধারণা প্রদানের লক্ষে
                                ১০-১৯ বছর বয়সীদের জন্য পুষ্টি বিষয়ক
                                “কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা”
                                কোর্সটি প্রস্তুত করা হয়েছে, এই কোর্সে অংশ নিতে
                                এখনি নিবন্ধন করুন।
                            </p>
                        </div>

                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6">
                        <div class="reg-page">
                            <h4 class="text-center mb-4 text-danger">রেজিস্ট্রেশন</h4>
                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <!-- Name -->
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i
                                                        class="fa-regular fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control border border-round" id="name"
                                                name="name" placeholder='নাম'>
                                        </div>
                                        <div>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>




                                    <!-- Age -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i
                                                        class="fa-regular fa-calendar"></i></span>
                                            </div>
                                            <input type="number" placeholder="বয়স" class="form-control border border-round"
                                                id="age" name="age">
                                        </div>

                                        <div>
                                            @if ($errors->has('age'))
                                                <span class="text-danger">{{ $errors->first('age') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <!-- School Name -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i
                                                        class="fa-solid fa-building-columns"></i></span>
                                            </div>
                                            <input type="text" placeholder="বিদ্যালয়ের নাম"
                                                class="form-control border border-round" id="school" name="school_name">
                                        </div>

                                        <div>
                                            @if ($errors->has('school_name'))
                                                <span class="text-danger">{{ $errors->first('school_name') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <!-- Class -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-solid fa-file-pen"></i></span>
                                            </div>
                                            <input type="text" placeholder="শ্রেনী"
                                                class="form-control border border-round" id="class" name="class">
                                        </div>

                                        <div>
                                            @if ($errors->has('class'))
                                                <span class="text-danger">{{ $errors->first('class') }}</span>
                                            @endif
                                        </div>
                                    </div>



                                    <!-- Gender -->
                                    <div class="col-md-6">

                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i
                                                        class="fa-solid fa-venus-mars"></i></span>
                                            </div>
                                            <select class="form-control border border-round" name="gender"
                                                placeholder='লিঙ্গ'>
                                                <option value="" selected disabled>লিঙ্গ</option>
                                                <option value="পুরুষ">পুরুষ</option>
                                                <option value="মহিলা">মহিলা</option>
                                            </select>

                                        </div>
                                        <div>
                                            @if ($errors->has('gender'))
                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <!-- Mobile Number -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-solid fa-phone"></i></span>
                                            </div>
                                            <input type="tel" placeholder="মোবাইল নাম্বার"
                                                class="form-control border border-round " id="mobile" name="phone_no">
                                        </div>

                                        <div>
                                            @if ($errors->has('phone_no'))
                                                <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                            @endif
                                        </div>
                                    </div>



                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-regular fa-envelope"></i></span>
                                            </div>
                                            <input type="email" placeholder="ইমেইল"
                                                class="form-control border border-round" id="email" name="email">
                                        </div>

                                        <div>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>



                                    <!-- Password -->
                                    <div class="col-md-6">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-solid fa-lock"></i></span>
                                            </div>
                                            <input type="password" placeholder="পাসওয়ার্ড"
                                                class="form-control border border-round" id="password" name="password">
                                        </div>

                                        <div>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>



                                    <!-- Present Address -->
                                    <div class="col-md-12">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-solid fa-map-location-dot"></i></span>
                                            </div>
                                            <input class="form-control border border-round p-3"
                                                placeholder='বর্তমান ঠিকানা' id="presentAddress" name="present_address"
                                                rows="3"></ই>
                                        </div>

                                        <div>
                                            @if ($errors->has('present_address'))
                                                <span class="text-danger">{{ $errors->first('present_address') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <!-- Division Address -->
                                    <div class="col-md-12">
                                        <div class="input-group shadow-sm border border-round border-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border border-round"
                                                    style="background-color: transparent;"><i class="fa-solid fa-location-dot"></i></span>
                                            </div>
                                            <select class="form-control border border-round" name="division">
                                                <option value="" selected disabled>বিভাগ</option>
                                                <option value="ঢাকা">ঢাকা</option>
                                                <option value="চট্রগ্রাম">চট্রগ্রাম</option>
                                                <option value="রাজশাহী">রাজশাহী</option>
                                                <option value="খুলনা">খুলনা</option>
                                                <option value="সিলেট">সিলেট</option>
                                                <option value="বরিশাল">বরিশাল</option>
                                                <option value="রংপুর">রংপুর</option>
                                                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                                            </select>
                                        </div>

                                        <div>
                                            @if ($errors->has('division'))
                                                <span class="text-danger">{{ $errors->first('division') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Nutrition club সদস্য:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="is_club_member"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1"
                                                value="yes">হ্যাঁ</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="is_club_member"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2" value="no">না</label>
                                        </div>
                                        <div>
                                            @if ($errors->has('is_club_member'))
                                                <span class="text-danger">{{ $errors->first('is_club_member') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success border border-round p-2 shadow-sm">একাউন্ট তৈরি
                                        করুন</button>
                                </div>
                            </form>
                            <p class="text-center mt-3">একাউন্ট আছে? <a href="{{ route('login') }}">লগ ইন</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
