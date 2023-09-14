<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    // courses
    public function courses()
    {
        $courses = Chapter::all();
        return view('frontend.courses__lessons.course_chapter', compact('courses'));
    }

    public function courses_name($id)
    {

        $chapters = Chapter::all();



        // $course_name = ['food_and_nutrition','healthy_life','mental_health','leadership','social_scope'];
        //dd($name);
        return view('frontend.courses__lessons.course_2',  compact('chapters'));
    }
    public function courses_view($id)
    {
        $chapters = Chapter::all();
        $lesson = Lesson::find($id);
        return view('frontend.courses__lessons.course_view', compact('lesson', 'chapters'));
    }

    public function index()
    {
        $chapters = Chapter::all();

        return view('backend.chapter.chapter-index', compact('chapters'));
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
        return redirect()->route('chapter.index');
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
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
        return redirect()->route('chapter.index');
    }
}
