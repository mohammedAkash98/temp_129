<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;



class WebinarController extends Controller
{
    public function index()
    {
        $webinars = Webinar::paginate(10);


        return view('backend.webinar.webinar-index', compact('webinars'));
    }
    public function create()
    {
        return view('backend.webinar.webinar-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }


        $data['user_id'] = auth()->user()->id;



        Webinar::create($data);
        toastr()->success('Webinar created successfully!', 'Congrats');
        return redirect()->route('webinar.index');
    }

    public function delete($id)
    {
        $webinar =  Webinar::where('id', $id)->first();


        if ($webinar->image) {
            $this->unlink($webinar->image);
        }

        $webinar->delete();
        toastr()->error('Webinar deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $webinar = Webinar::find($id);
        return view('backend.webinar.webinar-info', compact('webinar'));
    }

    public function edit($id)
    {
        $webinar = Webinar::find($id);

        return view('backend.webinar.webinar-edit', compact('webinar'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $webinar = Webinar::where('id', $id)->first();

            $this->unlink($webinar->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }

        $data['user_id'] = auth()->user()->id;



        Webinar::where('id', $id)->update($data);
        toastr()->success('Webinar updated successfully!', 'Congrats');
        return redirect()->route('webinar.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/webinar', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/webinar/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
