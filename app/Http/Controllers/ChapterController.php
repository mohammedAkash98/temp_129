<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Overview;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    // courses
    public function courses()
    {
        $courses = Chapter::all();
        if (!Overview::where('user_id', auth()->user()->id)->first()) {
            Overview::create([
                'user_id' => auth()->user()->id,
                'current_chapter_id' => 1,
                'current_lesson_id' => 1,
                'marks' => 0,
            ]);
        }

        return view('frontend.courses__lessons.course_chapter', compact('courses'));
    }

    public function courses_name($id)
    {

        $chapters = Chapter::all();
        // return $chapters;
        return view('frontend.courses__lessons.course_2', compact('chapters'));
    }
    public function courses_view($id)
    {
        $chapters = Chapter::all();
        $lesson = Lesson::find($id);
        // dd($lesson->id);
        return view('frontend.courses__lessons.course_view', compact('lesson', 'chapters'));
    }

    public function index()
    {
        $chapters = Chapter::paginate(10);
        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 10 : 0;
        return view('backend.chapter.chapter-index', compact('chapters', 'sl'));
    }

    public function create()
    {
        return view('backend.chapter.chapter-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Chapter::create([
            'name' => $request->name,
        ]);
        toastr()->success('Chapter created successfully!', 'Congrats');
        return redirect()->route('chapter.index');
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        toastr()->error('Chapter deleted!', 'Delete');
        return redirect()->back();
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        return view('backend.chapter.chapter-edit', compact('chapter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $chapter = Chapter::where('id', $id)->first();

        $chapter->update([
            'name' => $request->name,
        ]);
        toastr()->success('Chapter updated successfully!', 'Congrats');
        return redirect()->route('chapter.index');
    }
}
