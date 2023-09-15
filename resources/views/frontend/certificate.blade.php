@extends('main_master')

@section('page_content')
    <style>
        /* Custom CSS for the certificate design */
    </style>

    <div class="container certificate-container text-center">
        <div class="certificate">
            <img src="{{ asset('images/Certificate/certificate-border.png') }}" class="certifiate-border"
                alt="Certificate Border">

            <img src="{{asset('images/Certificate/BIID-logo.png')}}" class="BIID-logo position-absolute" alt="">

            <div class="certificate-content m-3">
                <img src="{{ asset('assets/img/Screenshot_9_1.png') }}" class="e-pushti-logo" style="width: 16%;" alt="">
                <h1 class="py-3">Certificate of Appreciation</h1>
                <h3 class="username py-2">User's Name</h3>
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
                                <div class="line-1 mb-3"></div>
                                <h6>First Name</h6>
                                <Strong>Manager</Strong>
                            </td>
                            <td>
                                <div class="line-1 mb-3"></div>
                                <h6>Second Name</h6>
                                <Strong>Assistant</Strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="certificate-content pb3-">কৈশোরকালীন পুষ্টি ও সাস্থ্যসম্মত জীবনধারা</p>
            </div>
        </div>
    </div>
@endsection
