<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::paginate(10);


        return view('backend.lesson.lesson-index', compact('lessons'));
    }

    public function create()
    {
        $chapters = Chapter::all();
        return view('backend.lesson.lesson-create', compact('chapters'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
        ]);

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
        }

        $data['image'] = $image;
        $data['chapter_id'] = $request->chapter_id;



        Lesson::create($data);

        return redirect()->route('lesson.index');
    }

    public function delete($id)
    {
        $lesson =  Lesson::where('id', $id)->first();


        if ($lesson->image) {
            $this->unlink($lesson->image);
        }

        $lesson->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $lesson = Lesson::find($id);
        $chapters = Chapter::all();
        return view('backend.lesson.lesson-edit', compact('lesson', 'chapters'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
        ]);

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $lesson = Lesson::where('id', $id)->first();

            $this->unlink($lesson->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }

        $data['chapter_id'] = $request->chapter_id;



        Lesson::where('id', $id)->update($data);
        return redirect()->route('lesson.index');
    }
    public function info($id)
    {
        $lesson = Lesson::find($id);
        return view('backend.lesson.lesson-info', compact('lesson'));
    }
    //image function

    public function uploadImage($title, $image)
    {

        // $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());


        // $file_name = $timestamp . '-' . $title . '.' . $image->getClientOriginalExtension();

        // $pathToUpload = storage_path() . '/app/public/lesson/';

        // if (!is_dir($pathToUpload)) {

        //     mkdir($pathToUpload, 0755, true);
        // }

        // Image::make($image)->resize(650, 342)->save($pathToUpload . $file_name);

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/lesson', $file_name);

        return $file_name;
    }

    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/lesson/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
