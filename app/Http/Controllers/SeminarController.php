<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::paginate(10);


        return view('backend.seminar.seminar-index', compact('seminars'));
    }
    public function create()
    {
        return view('backend.seminar.seminar-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }


        $data['user_id'] = auth()->user()->id;



        Seminar::create($data);
        toastr()->success('Seminar created successfully!', 'Congrats');
        return redirect()->route('seminar.index');
    }

    public function delete($id)
    {
        $seminar =  Seminar::where('id', $id)->first();


        if ($seminar->image) {
            $this->unlink($seminar->image);
        }

        $seminar->delete();
        toastr()->error('Seminar deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $seminar = Seminar::find($id);
        return view('backend.seminar.seminar-info', compact('seminar'));
    }

    public function edit($id)
    {
        $seminar = Seminar::find($id);

        return view('backend.seminar.seminar-edit', compact('seminar'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $seminar = Seminar::where('id', $id)->first();

            $this->unlink($seminar->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }

        $data['user_id'] = auth()->user()->id;



        Seminar::where('id', $id)->update($data);
        toastr()->success('Seminar updated successfully!', 'Congrats');
        return redirect()->route('seminar.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/seminar', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/seminar/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
