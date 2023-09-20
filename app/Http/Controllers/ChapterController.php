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

            $current_chapter_id =  Chapter::all()->first()->id;

            $current_chapter_id = Lesson::where('chapter_id', $current_chapter_id)->first()->id;



            Overview::create([
                'user_id' => auth()->user()->id,
                'current_chapter_id' => $current_chapter_id,
                'current_lesson_id' => $current_chapter_id,
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
        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }
        Chapter::create($data);

        toastr()->success('Chapter created successfully!', 'Congrats');
        return redirect()->route('chapter.index');
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);

        if ($chapter->image) {
            $this->unlink($chapter->image);
        }
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
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $category = Chapter::where('id', $id)->first();

            $this->unlink($category->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }
        $category = Chapter::where('id', $id)->update($data);
        toastr()->success('Chapter updated successfully!', 'Congrats');
        return redirect()->route('chapter.index');
    }

    //image function
    public function uploadImage($title, $image)
    {
        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();
        $image->move('storage/chapter', $file_name);
        return $file_name;
    }

    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/chapter/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
