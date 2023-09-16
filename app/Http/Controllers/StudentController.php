<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



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

        return view('frontend.certificate');
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
