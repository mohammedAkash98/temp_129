<div class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ Route('dashboard') }}">
                <img src="{{asset("assets/img/Screenshot_9_1.png")}}" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                @if(!Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ Route('dashboard') }}">হোম</a>
                    </li>
                @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{ Route('dashboard') }}">হোম</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('courses')}}">কোর্স</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('video')}}">ভিডিও</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('seminar')}}">সেমিনার</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('about-us')}}">আমাদের সম্পর্কে</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('contact')}}">যোগাযোগ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Add a rounded image here -->
                        <img src="https://cdn.vectorstock.com/i/preview-1x/47/62/bangladesh-flag-in-glossy-round-button-of-icon-vector-22994762.jpg" alt="Language Flag" class="rounded-flag" height="50px" width="50px"> ভাষা
                    </a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        {{-- <a class="dropdown-item" href="#">English</a> --}}
                        <a class="dropdown-item" href="#">বাংলা</a>
                        <!-- Add more language options as needed -->
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @php 
                        
                            $name = Auth::user()->name;
                            $words = explode(' ', $name);
                            $firstName = $words[0];
                            echo $firstName;
                            
                        @endphp
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('student.profile') }}">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
                </li>
                @endif
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
