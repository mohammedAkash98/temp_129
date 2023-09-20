<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Certificate</title>
</head>

<body>
<style>

@font-face {
    font-family: CertificateFont;
    src: url("../font/certificate/Certificate_Bold.ttf");
}

@font-face {
    font-family: CertificateUser;
    src: url("../font/certificate_name/name3.ttf");
}
.certificate-container {
    position: relative;
    width: 800px;
    margin: 50px auto;
}

.certificate {
    background-color: #ffffff;
    padding: 30px;
    border: 1px solid #000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.certificate h1 {
    font-family: CertificateFont;
}

.certificate .username {
    font-family: CertificateUser;
}

.certificate .certifiate-border {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.certificate-content {
    font-size: 18px;
    margin-top: 30px;
}

.BIID-logo {
    top: 40%;
    right: 25%;
    opacity: 0.1;
}

.quize input[type="radio"] {
    width: 20px;
    height: 20px;
    color: white;
}

@media screen and (max-width: 768px) {
    .top-navbar .box-container {
        flex-direction: column;
    }

    .top-navbar .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: 15px;
        margin-left: 20px;
    }

    .registrationPage .content,
    .reg-page {
        margin: 0;
    }
}
</style>
    <div class="container certificate-container" style='text-align: center;'>
        <div class="certificate">
            <img src="{{ public_path('images/Certificate/certificate-border.png') }}" class="certifiate-border"
                alt="Certificate Border">

            <img src="{{public_path('images/Certificate/BIID-logo.png')}}" class="BIID-logo" alt="" style="position: absolute;">

            <div class="certificate-content" style="margin: 1rem;">
                <img src="{{ public_path('assets/img/Screenshot_9_1.png') }}" class="e-pushti-logo" style="width: 16%;" alt="">
                <h1 style="padding: 1rem 0;">Certificate of Appreciation</h1>
                <h3 class="username" style="padding:1rem 0;">{{ auth()->user()->name ?? 'Your Name' }}</h3>
                <p class="" style="font-size: 12px; margin: auto 18%;">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quas qui delectus vel numquam
                    reprehenderit
                    explicabo ipsum maxime optio molestiae consectetur? Dolor veritatis molestias voluptatibus laborum
                    quaerat
                    animi dolorem repellat omnis?</p>

                <table class="tabl my-5" style="border: none; margin:3rem;">
                    <tbody>
                        <tr  style="font-size: 12px; text-align: center">
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

</body>

</html>

<html lang="en"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><style lang="en" type="text/css" id="dark-mode-native-sheet"></style><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Pushti</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://127.0.0.1:8000/assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- icon -->
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">


<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/bar/circular_bar.css">


<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/bar/line_bar.css">




<script type="text/javascript" class="flasher-js">(function() {    var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js';    var FLASHER_FLASH_BAG_PLACE_HOLDER = {};    var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);    function mergeOptions(first, second) {        return {            context: merge(first.context || {}, second.context || {}),            envelopes: merge(first.envelopes || [], second.envelopes || []),            options: merge(first.options || {}, second.options || {}),            scripts: merge(first.scripts || [], second.scripts || []),            styles: merge(first.styles || [], second.styles || []),        };    }    function merge(first, second) {        if (Array.isArray(first) && Array.isArray(second)) {            return first.concat(second).filter(function(item, index, array) {                return array.indexOf(item) === index;            });        }        return Object.assign({}, first, second);    }    function renderOptions(options) {        if(!window.hasOwnProperty('flasher')) {            console.error('Flasher is not loaded');            return;        }        requestAnimationFrame(function () {            window.flasher.render(options);        });    }    function render(options) {        if ('loading' !== document.readyState) {            renderOptions(options);            return;        }        document.addEventListener('DOMContentLoaded', function() {            renderOptions(options);        });    }    if (1 === document.querySelectorAll('script.flasher-js').length) {        document.addEventListener('flasher:render', function (event) {            render(event.detail);        });    }    if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript + '"]')) {        render(options);    } else {        var tag = document.createElement('script');        tag.setAttribute('src', rootScript);        tag.setAttribute('type', 'text/javascript');        tag.onload = function () {            render(options);        };        document.head.appendChild(tag);    }})();</script><script src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js" type="text/javascript"></script>
</head>

<body class="antialiased" data-new-gr-c-s-check-loaded="14.1125.0" data-gr-ext-installed="" cz-shortcut-listen="true">

    <div class="top-navbar ">
<nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
            <img src="http://127.0.0.1:8000/assets/img/Screenshot_9_1.png" alt="Logo" width="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000">ড্যাশবোর্ড</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/student/courses">কোর্স</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/student/video">ভিডিও</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/student/seminar">সেমিনার</a>
            </li>
            <li class="nav-item">

                <div class="btn-group">
                    <button type="button" class="nav-link bg-light border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        রিসোর্স
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="http://127.0.0.1:8000/resource/svcc/index">SVCC</a>
                      <a class="dropdown-item" href="http://127.0.0.1:8000/resource/activity_sheet/index">Activity Sheet</a>
                      <a class="dropdown-item" href="http://127.0.0.1:8000/resource/others/index">Others</a>
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
                    শাওন                    </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="http://127.0.0.1:8000/student/profile">My Profile</a>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/student/certificate">Certificate</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout">Logout</a>
                </div>
            </li>

            </ul>
        </div>
    </div>
</nav>
</div>

        <style>
 /* custom css here */
</style>

<div class="container certificate-container text-center">
    <div class="certificate">
        <img src="http://127.0.0.1:8000/images/Certificate/certificate-border.png" class="certifiate-border" alt="Certificate Border">

        <img src="http://127.0.0.1:8000/images/Certificate/BIID-logo.png" class="BIID-logo position-absolute" alt="">

        <div class="certificate-content m-3">
            <img src="http://127.0.0.1:8000/assets/img/Screenshot_9_1.png" class="e-pushti-logo" style="width: 16%;" alt="">
            <h1 class="py-3">Certificate of Appreciation</h1>
            <h3 class="username py-2">শাওন</h3>
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
                            <strong>Manager</strong>
                        </td>
                        <td>
                            <h6>Assistant Signature</h6>
                            <div class="line-1 mb-3"></div>
                            <h6>Assistant Name</h6>
                            <strong>Assistant</strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <p class="certificate-content pb3-">কৈশোরকালীন পুষ্টি ও সাস্থ্যসম্মত জীবনধারা</p>
        </div>
    </div>
</div>
<div class="text-center mb-3">
    <a href="http://127.0.0.1:8000/pdf/student/certificate" target="_blank" class="btn btn-success mx-auto">সার্টিফিকেট ডাউনলোড করুন</a>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>










</body><div style="all: initial; display: inline; border: 0; margin: 0; padding: 0; user-select: none; overflow: hidden; font-size: 0px;"></div><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>
