<nav class="navbar navbar-expand-lg bg-white navbar_top">

    <div class="container-fluid">

        <a class="navbar-brand" href="{{ Route('home_page') }}">
            <img src="{{ asset('assets/img/Screenshot_9_1.png') }}" alt="Logo" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#home_section">
                        <img class="img-fluid" src="{{ asset('assets/icon/house.png') }}" alt="">
                        হোম</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#course_section">
                        <img class="img-fluid" src="{{ asset('assets/icon/course.png') }}" alt="">
                        কোর্স সমূহ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#!">
                        <img class="img-fluid" src="{{ asset('assets/icon/blogging.png') }}" alt="">
                        ব্লগ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#!">
                        <img class="img-fluid" src="{{ asset('assets/icon/webinar.png') }}" alt="">
                        ওয়েবিনার</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#!">
                        <img class="img-fluid" src="{{ asset('assets/icon/help.png') }}" alt="">
                        সহায়িকা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#!">
                        <img class="img-fluid" src="{{ asset('assets/icon/teamwork.png') }}" alt="">
                        আমাদের সম্পর্কে</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#!">
                        <img class="img-fluid" src="{{ asset('assets/icon/contact.png') }}" alt="">
                        যোগাযোগ</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                            <img class="img-fluid" src="{{ asset('assets/icon/languages.png') }}" alt="">

                            ভাষা
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">বাংলা</a></li>
                            {{-- <li><a class="dropdown-item" href="#">ইংরেজী</a></li> --}}
                        </ul>
                    </div>
                </li>

            </ul>
            <div class="text-center">
                <a href="{{ route('login') }}" class="btn btn-color">Login / Register</a>
            </div>
        </div>
    </div>
    <div class="navbar-bottom-img">
        <img src="{{asset("assets/icon/nav-bg.png")}}" class="position-absolute w-100" alt="">
    </div>
</nav>
