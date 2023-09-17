<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Overview;
use App\Models\Quiz;
use App\Models\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 10 : 0;
        $quizzes = Quiz::paginate(10);

        return view('backend.quiz.quiz-index', compact('quizzes', 'sl'));
    }

    public function create()
    {
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('backend.quiz.quiz-create', compact('chapters', 'lessons'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
        ]);
        Quiz::create($request->all());
        toastr()->success('Quiz created successfully!', 'Congrats');
        return redirect()->route('quiz.index');
    }
    public function info($id)
    {
        $quiz = Quiz::where('id', $id)->first();
        return view('backend.quiz.quiz-info', compact('quiz'));
    }
    public function edit($id)
    {
        $quiz = Quiz::find($id);
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('backend.quiz.quiz-edit', compact('quiz', 'chapters', 'lessons'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
        ]);
        $quiz = Quiz::where('id', $id)->first();
        $quiz->update($request->all());
        toastr()->success('Quiz updated successfully!', 'Congrats');
        return redirect()->route('quiz.index');
    }

    public function delete($id)
    {
        Quiz::find($id)->delete();
        toastr()->error('Quiz deleted!', 'Delete');
        return redirect()->back();
    }
    public function quiz_view($chapter_id, $lesson_id)
    {
        $completed_chapter = Result::where('user_id', auth()->user()->id)
            ->where('chapter_id', $chapter_id)
            ->where('lesson_id', $lesson_id)
            ->first();

        if ($completed_chapter) {
            return view('frontend.courses__lessons.return_course');
        }
        $current_lesson_id = auth()->user()->overview->current_lesson_id;
        $quizzes = Quiz::where('lesson_id', $current_lesson_id)->get();
        $chapters = Chapter::all();
        $lesson = Lesson::all();
        // dd($quizzes);

        return view('frontend.courses__lessons.quiz', compact('quizzes', 'chapters', 'lesson'));
    }
    public function quiz_answer_store(Request $request)
    {
        // dd($request->all());
        $chapters = Chapter::all();
        $user_id = auth()->user()->id;
        $chapter_id = Lesson::where('id', $request->lesson_id)->first()->chapter->id;

        $submitted_answers = $request->quiz;

        if (
            !Result::where('user_id', $user_id)
                ->where('chapter_id', auth()->user()->overview->current_chapter_id)
                ->where('lesson_id', auth()->user()->overview->current_lesson_id)
                ->first()
        ) {
            $result = Result::create([
                'user_id' => $user_id,
                'lesson_id' => $request->lesson_id,
                'chapter_id' => $chapter_id,
            ]);
        }
        $existing_student = Result::where('user_id', $user_id)
            ->where('lesson_id', $request->lesson_id)
            ->where('chapter_id', $chapter_id)
            ->first();
        if ($existing_student) {
            $existing_student->update([
                'user_id' => $user_id,
                'lesson_id' => $request->lesson_id,
                'chapter_id' => $chapter_id,
            ]);


        }

        $quizzes = Quiz::where('chapter_id', $chapter_id)
            ->where('lesson_id', $request->lesson_id)
            ->get();

        $correct_ans = 0;
        $wrong_ans = 0;
        $skip_ans =0;
        if (count($submitted_answers) != 0) {
            foreach ($submitted_answers as $key => $submitted_answer) {
                // echo $key;
                // dd($submitted_answers[3]);
                // continue;
                $db_ans = Quiz::where('id', $key)->first()->correct_answer;
                // dd(($submitted_answer == $db_ans), strcmp($submitted_answer, $db_ans));
                if ($submitted_answer == $db_ans) {
                    $correct_ans++;
                } elseif ($submitted_answer != $db_ans) {
                    $wrong_ans++;
                }
            }
            // dd($submitted_answers, $quizzes, $key, 'Correct_ans: '. $correct_ans, $wrong_ans);
        }


        if (count($submitted_answers) != 0) {
            $skip_ans = count($quizzes) - count($submitted_answers);
        } else {
            $skip_ans = count($quizzes);
            // dd("skip");
        }

        $result = Result::where('user_id', $user_id)
            ->where('lesson_id', $request->lesson_id)
            ->where('chapter_id', $chapter_id)
            ->first();
        $result->update([
            'correct_ans' => $correct_ans,
            'wrong_ans' => $wrong_ans,
            'skip_ans' => $skip_ans,
        ]);
        $lesson = Lesson::where('id', $request->lesson_id + 1)->first();
        if (isset($lesson)) {
            $marks = Overview::where('user_id', $user_id)
                ->where('current_lesson_id', $request->lesson_id)
                ->where('current_chapter_id', $chapter_id)
                ->first();

            $marks->update([
                'marks' => $correct_ans,
                'current_lesson_id' => $request->lesson_id + 1,
                'current_chapter_id' => $lesson->chapter_id,
            ]);
        }
        // else {
        //     // $marks = Overview::where('user_id', $user_id)->where('lesson_id', $request->lesson_id)->where('chapter_id', $chapter_id)->first();
        //     // $marks->update([
        //     //     'marks' => $correct_ans,
        //     //     'current_lesson_id' => 1,
        //     //     'current_chapter_id' => $chapter_id + 1,
        //     // ]);
        //     return view('frontend.certificate');
        // }

        return view('frontend.courses__lessons.result', compact('chapters', 'result'));
    }

    // public function   quiz_result()
    // {
    // }
}
