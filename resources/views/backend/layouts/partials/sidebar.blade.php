<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        {{-- user --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                href="{{ route('user.index') }}">
                <i class="fa-solid fa-users"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bi bi-circle"></i><span>User List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.create') }}">
                        <i class="bi bi-circle"></i><span>Add User</span>
                    </a>
                </li>
            </ul>
        </li>


        {{-- chapter --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navChapter" data-bs-toggle="collapse"
                href="{{ route('chapter.index') }}">
                <i class="fa-solid fa-book"></i><span>Chapter</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navChapter" class="nav-content collapse " data-bs-parent="#sidebar-navChapter">

                <li>
                    <a href="{{ route('chapter.index') }}">
                        <i class="bi bi-circle"></i><span>Chapter List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('chapter.create') }}">
                        <i class="bi bi-circle"></i><span>Add Chapter</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- lesson --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navLesson" data-bs-toggle="collapse"
                href="{{ route('lesson.index') }}">
                <i class="fa-solid fa-person-chalkboard"></i><span>Lesson</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navLesson" class="nav-content collapse " data-bs-parent="#sidebar-navLesson">

                <li>
                    <a href="{{ route('lesson.index') }}">
                        <i class="bi bi-circle"></i><span>Lesson List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('lesson.create') }}">
                        <i class="bi bi-circle"></i><span>Add Lesson</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Quiz start --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navQuiz" data-bs-toggle="collapse"
                href="{{ route('quiz.index') }}">
                <i class="fa-solid fa-question"></i><span>Quiz</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navQuiz" class="nav-content collapse " data-bs-parent="#sidebar-navQuiz">

                <li>
                    <a href="{{ route('quiz.index') }}">
                        <i class="bi bi-circle"></i><span>Quiz List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('quiz.create') }}">
                        <i class="bi bi-circle"></i><span>Add Quiz</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- webinar start --}}

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navWebinar" data-bs-toggle="collapse"
                href="{{ route('webinar.index') }}">
                <i class="fa-solid fa-handshake"></i><span>Webinar</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navWebinar" class="nav-content collapse " data-bs-parent="#sidebar-navWebinar">

                <li>
                    <a href="{{ route('webinar.index') }}">
                        <i class="bi bi-circle"></i><span>Webinar List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('webinar.create') }}">
                        <i class="bi bi-circle"></i><span>Add Webinar</span>
                    </a>
                </li>
            </ul>
        </li>


        {{-- team start --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navTeam" data-bs-toggle="collapse"
                href="{{ route('team.index') }}">
                <i class="fa-solid fa-people-group"></i><span>Team</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navTeam" class="nav-content collapse " data-bs-parent="#sidebar-navTeam">

                <li>
                    <a href="{{ route('team.index') }}">
                        <i class="bi bi-circle"></i><span>Team List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('team.create') }}">
                        <i class="bi bi-circle"></i><span>Add Team</span>
                    </a>
                </li>
            </ul>
        </li>


        {{-- home content start --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navHomeContent" data-bs-toggle="collapse"
                href="{{ route('home_content.index') }}">
                <i class="fa-solid fa-arrows-to-circle"></i><span>Home Content</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navHomeContent" class="nav-content collapse " data-bs-parent="#sidebar-navHomeContent">

                <li>
                    <a href="{{ route('home_content.index') }}">
                        <i class="bi bi-circle"></i><span>Home Content List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home_content.create') }}">
                        <i class="bi bi-circle"></i><span>Add Home Content</span>
                    </a>
                </li>


            </ul>
            {{-- svcc start --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-navSvcc" data-bs-toggle="collapse"
                    href="{{ route('svcc.index') }}">
                    <i class="fa-solid fa-image"></i><span>SVCC</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-navSvcc" class="nav-content collapse " data-bs-parent="#sidebar-navSvcc">

                    <li>
                        <a href="{{ route('svcc.index') }}">
                            <i class="bi bi-circle"></i><span>SVCC List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('svcc.create') }}">
                            <i class="bi bi-circle"></i><span>Add SVCC</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- activity sheet start --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-navActivitySheet" data-bs-toggle="collapse"
                    href="{{ route('activity_sheet.index') }}">
                    <i class="fa-solid fa-file-pdf"></i><span>Activity Sheet</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-navActivitySheet" class="nav-content collapse " data-bs-parent="#sidebar-navActivitySheet">

                    <li>
                        <a href="{{ route('activity_sheet.index') }}">
                            <i class="bi bi-circle"></i><span>Activity Sheet List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('activity_sheet.create') }}">
                            <i class="bi bi-circle"></i><span>Add Acitivity Sheet</span>
                        </a>
                    </li>
                </ul>
            </li>
{{-- other start --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-navOther" data-bs-toggle="collapse"
                    href="{{ route('other.index') }}">
                    <i class="fa-brands fa-mixer"></i><span>Other</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-navOther" class="nav-content collapse " data-bs-parent="#sidebar-navOther">

                    <li>
                        <a href="{{ route('other.index') }}">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('other.create') }}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                </ul>
            </li>
{{-- seminar start --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-navSeminar" data-bs-toggle="collapse"
                    href="{{ route('seminar.index') }}">
                    <i class="fa-solid fa-chess-board"></i><span>Seminar</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-navSeminar" class="nav-content collapse " data-bs-parent="#sidebar-navSeminar">

                    <li>
                        <a href="{{ route('seminar.index') }}">
                            <i class="bi bi-circle"></i><span>Seminar List</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seminar.create') }}">
                            <i class="bi bi-circle"></i><span>Add Seminar</span>
                        </a>
                    </li>
                </ul>
            </li>


</aside>
