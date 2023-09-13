<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;



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




    //image function
    public function uploadImage($title, $image)
    {

        // $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());


        // $file_name = $timestamp . '-' . $title . '.' . $image->getClientOriginalExtension();

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/student',$file_name);

        // $pathToUpload = storage_path() . 'public/storage/student/';  // image  upload application save korbo

        // if (!is_dir($pathToUpload)) {

        //     mkdir($pathToUpload, 0755, true);
        // }

        // Image::make($image)->resize(800, 600)->save($pathToUpload . $file_name);

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
