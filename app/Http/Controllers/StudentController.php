<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class StudentController extends Controller
{
    public function profile()
    {
        return view('frontend.student.student-profile');
    }
    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $student = User::where('id', $id)->first();

            $this->unlink($student->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }
        User::where('id', $id)->update($data);
        return redirect()->route('student.profile');
    }
    public function delete($id)
    {
        $student =  User::where('id', $id)->first();


        if ($student->image) {
            $this->unlink($student->image);
        }
        $student->image = null;
        $student->save();



        return redirect()->back();
    }
    public function certificate()
    {
        $lesson_length = Lesson::all()->count();

        $user = auth()->user();
        $current_lesson_id = $user->overview->current_lesson_id;
        $current_chapter_id = $user->overview->current_chapter_id;

        $result = Result::where('user_id', $user->id)
            ->where('lesson_id', $current_lesson_id)
            ->where('chapter_id', $current_chapter_id)
            ->first();

        if ($result && $result->lesson_id && $result->lesson_id == $lesson_length) {
            return view('frontend.certificate');
        } else {
            $courses = Chapter::all();
            return view('frontend.courses__lessons.course_chapter', compact('courses'));
        }
    }


    public function profile_password_update(Request $request, $id)
    {

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);


        $user = User::find($id);


        if (!Hash::check($request->old_password, $user->password)) {
            toastr()->error('Oops! Old password is incorrect!', 'Oops!');
            return redirect()->back();
        }




        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
        toastr()->success('Password has been updated successfully!', 'Congrats');
        return redirect()->route('student.profile');
    }

    //image function
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/student', $file_name);

        return $file_name;
    }


    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/student/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
