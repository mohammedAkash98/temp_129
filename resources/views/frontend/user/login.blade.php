@extends('main_master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
@section('page_content')
    <section class="registrationPage">
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
                            <h4 class="text-center mb-4 text-danger">লগইন</h4>
                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="mobile">মোবাইল নাম্বার:</label>
                                        <input type="tel" class="form-control border border-round shadow-sm p-4" id="mobile" name="phone_no" placeholder='আপনার মোবাইল নাম্বার দিন'>
                                    </div>
                                    <div>
                                        @if ($errors->has('phone_no'))
                                            <span class="text-danger">{{ $errors->first('phone_no') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">পাসওয়ার্ড:</label>
                                    <input type="password" class="form-control border border-round shadow-sm p-4" id="password" name="password" placeholder="আপনার পাসওয়ার্ড দিন">
                                    <div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block border border-round">লগ ইন</button>
                            </form>
                            <p class="text-center mt-3">একাউন্ট নেই? <a
                                    href="{{ route('register') }}">রেজিস্ট্রেশন</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- modal --}}
    <button id="myButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Success message
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 border-round">

                <div class="modal-body mx-auto">
                    <div class="mb-3 text-center">
                        <img src="{{ asset('assets/icon/success.png') }}" class="w-50" alt="">
                    </div>
                    <h4>রেজিস্ট্রেশন সফল হয়েছে!</h4>
                </div>

            </div>
        </div>
    </div>


@endsection
