

<nav id="sidebar" class="col-md-4 col-lg-4 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">

                <!-- main side navbar -->
                @foreach ($chapters as $key=> $chapter )

                <a class="nav-link text-dark font-weight-bold" id="sidebar-arrow" data-toggle="collapse"
                href="#collapseSideSubNav" role="button" aria-expanded="false"
                aria-controls="collapseSideSubNav">
                <div class="arrow" id="arrow"></div>
                অধ্যায়-{{ $chapter->chapter_no_bangla?? '' }}:{{ $chapter->name ?? '' }}
                 <!-- sub navbar -->
                 <div class="collapse" id="collapseSideSubNav" style="margin-left: 30px;">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                       @foreach ($chapter->lessons as $key => $lesson )
                       <a class="nav-link"  href="{{ route('courses.view',$lesson->id) }}"
                        aria-selected="true">
                       <span><img src="{{ asset('assets/icon/right_in _round_Ash.png') }}"
                               alt=""></span>
                       পাঠ-{{ $lesson->lesson_no_bangla ?? ''}}: {{ $lesson->name ?? '' }}
                   </a>

                       @endforeach
                    </div>
                </div>
            </a>
                @endforeach



            </li>
        </ul>
    </div>
</nav>
