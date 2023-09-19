@extends('main_master')
@section('page_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mt-5">
                @php
                    $lesson_length = \App\Models\Lesson::all()->count();

                    $user = auth()->user();
                    $current_lesson_id = auth()->user()->overview->current_lesson_id;
                    $current_chapter_id = auth()->user()->overview->current_chapter_id;

                    $result = \App\Models\Result::where('user_id', $user->id)
                        ->where('lesson_id', $current_lesson_id)
                        ->where('chapter_id', $current_chapter_id)
                        ->first();

                    if ($result && $result->lesson_id && $result->lesson_id == $lesson_length) {
                        echo '<h2 class="mb-4">আপনি সফলভাবে সকল অধ্যায় সম্পন্ন করেছেন।</h2>';
                        echo '<a href="'.route('certificate').'" class="btn btn-success">সার্টিফিকেট ডাউনলোড করুন</a>';
                    } else {
                        echo '<h2 class="mb-4">দুঃখিত আপনি ইতোমধ্যেই এই কুইজে অংশগ্রহণ করেছেন ।</h2>';
                        echo '<a href="'.route('courses').'" class="btn btn-success">কোর্সে ফিরে যান</a>';
                    }
                @endphp
            </div>
        </div>
    </div>
@endsection
