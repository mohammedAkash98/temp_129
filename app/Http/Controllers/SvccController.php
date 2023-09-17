<?php

namespace App\Http\Controllers;

use App\Models\Svcc;
use Illuminate\Http\Request;

class SvccController extends Controller
{
    public function index()
    {
        $svccs = Svcc::paginate(10);


        return view('backend.svcc.svcc-index', compact('svccs'));
    }
    public function create()
    {
        return view('backend.svcc.svcc-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }
        $data['user_id'] = auth()->user()->id;
        Svcc::create($data);
        toastr()->success('SVCC created successfully!', 'Congrats');
        return redirect()->route('svcc.index');
    }

    public function delete($id)
    {
        $svcc =  Svcc::where('id', $id)->first();


        if ($svcc->image) {
            $this->unlink($svcc->image);
        }

        $svcc->delete();
        toastr()->error('SVCC deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $svcc = Svcc::find($id);
        return view('backend.svcc.svcc-info', compact('svcc'));
    }

    public function edit($id)
    {
        $svcc = Svcc::find($id);

        return view('backend.svcc.svcc-edit', compact('svcc'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $svcc = svcc::where('id', $id)->first();

            $this->unlink($svcc->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }

        $data['user_id'] = auth()->user()->id;
        Svcc::where('id', $id)->update($data);
        toastr()->success('Svcc updated successfully!', 'Congrats');
        return redirect()->route('svcc.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/svcc', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/svcc/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
