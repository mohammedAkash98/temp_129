<?php

namespace App\Http\Controllers;

use App\Models\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function index()
    {
        $others = Other::paginate(10);


        return view('backend.other.other-index', compact('others'));
    }
    public function create()
    {
        return view('backend.other.other-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }
        $data['user_id'] = auth()->user()->id;
        Other::create($data);
        toastr()->success('Data created successfully!', 'Congrats');
        return redirect()->route('other.index');
    }

    public function delete($id)
    {
        $other =  Other::where('id', $id)->first();


        if ($other->image) {
            $this->unlink($other->image);
        }

        $other->delete();
        toastr()->error('Data deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $other = Other::find($id);
        return view('backend.other.other-info', compact('other'));
    }

    public function edit($id)
    {
        $other = Other::find($id);

        return view('backend.other.other-edit', compact('other'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $other = Other::where('id', $id)->first();

            $this->unlink($other->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }
        $data['user_id'] = auth()->user()->id;

        Other::where('id', $id)->update($data);
        toastr()->success('Data updated successfully!', 'Congrats');
        return redirect()->route('other.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/other', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/other/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
