@php
$numto = new Rakibhstu\Banglanumber\NumberToBangla();

@endphp
<nav id="sidebar" class="col-md-4 col-lg-4 d-md-block bg-light sidebar">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">

                <!-- main side navbars -->
                @foreach ($chapters as $key => $chapter)
                    <a class="nav-link text-dark font-weight-bold sidebar-arrow" id="sidebar-arrow" data-toggle="collapse"
                        href="{{ '#collapseSideSubNav' . $key + 1 }}" role="button" aria-expanded="false"
                        aria-controls="{{ 'collapseSideSubNav' . $key + 1 }}">
                        <div class="arrow" id="arrow"></div>
                        অধ্যায়-{{ $numto->bnNum($key+1) ?? '' }}:{{ $chapter->name ?? '' }}
                    </a>

                    <!-- sub navbar -->
                    <div class="collapse" id="{{ 'collapseSideSubNav' . $key + 1 }}" style="margin-left: 30px;">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            @foreach ($chapter->lessons as $key_l => $lesson)
                                {{-- {{ Auth::user()->overview->id <= $lesson->id}} --}}
                                @if (Auth::user()->overview->current_lesson_id >= $lesson->id)
                                    <a class="nav-link side-link" href="{{ route('courses.view', $lesson->id) }}"
                                        aria-selected="true" style="background: #58A435;">

                                        <span><i class="lni lni-checkmark-circle text-white"></i></span>
                                        পাঠ-:{{ $numto->bnNum($key_l+1) ?? '' }}: {{ $lesson->name ?? '' }}

                                    </a>
                                @else
                                    <a class="nav-link side-link" aria-selected="true">
                                        <span><i class="lni lni-lock-alt h6" style="color: red"></i></span>
                                        পাঠ-:{{ $numto->bnNum($key_l+1) ?? '' }}: {{ $lesson->name ?? '' }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </li>
        </ul>
    </div>
</nav>
