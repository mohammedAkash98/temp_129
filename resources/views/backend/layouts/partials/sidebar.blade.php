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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('user.index') }}">
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
        <a class="nav-link collapsed" data-bs-target="#components-navChapter" data-bs-toggle="collapse" href="{{ route('chapter.index') }}">
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
        <a class="nav-link collapsed" data-bs-target="#components-navLesson" data-bs-toggle="collapse" href="{{ route('lesson.index') }}">
            <i class="fa-solid fa-person-chalkboard"></i><span>Lesson</span><i class="bi bi-chevron-down ms-auto"></i>
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
        <a class="nav-link collapsed" data-bs-target="#components-navQuiz" data-bs-toggle="collapse" href="{{ route('quiz.index') }}">
            <i class="fa-solid fa-person-chalkboard"></i><span>Quiz</span><i class="bi bi-chevron-down ms-auto"></i>
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
    </ul>

  </aside>
