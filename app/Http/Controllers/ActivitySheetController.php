<?php

namespace App\Http\Controllers;

use App\Models\ActivitySheet;
use Illuminate\Http\Request;

class ActivitySheetController extends Controller
{
    public function index()
    {
        $activity_sheets = ActivitySheet::paginate(10);


        return view('backend.activity_sheet.activity_sheet-index', compact('activity_sheets'));
    }
    public function create()
    {
        return view('backend.activity_sheet.activity_sheet-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->pdf) {
            $pdf = $this->uploadImage($request->name, $request->pdf);
            $data['pdf'] = $pdf;
        }
        $data['user_id'] = auth()->user()->id;
        ActivitySheet::create($data);
        toastr()->success('Activity sheet created successfully!', 'Congrats');
        return redirect()->route('activity_sheet.index');
    }

    public function delete($id)
    {
        $activity_sheet =  ActivitySheet::where('id', $id)->first();


        if ($activity_sheet->pdf) {
            $this->unlink($activity_sheet->pdf);
        }

        $activity_sheet->delete();
        toastr()->error('Activity sheet deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $activity_sheet = ActivitySheet::find($id);
        return view('backend.activity_sheet.activity_sheet-info', compact('activity_sheet'));
    }

    public function edit($id)
    {
        $activity_sheet = ActivitySheet::find($id);

        return view('backend.activity_sheet.activity_sheet-edit', compact('activity_sheet'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('pdf')) {
            $activity_sheet = ActivitySheet::where('id', $id)->first();

            $this->unlink($activity_sheet->pdf);

            $data['pdf'] = $this->uploadImage($request->name, $request->pdf);
        }

        $data['user_id'] = auth()->user()->id;
        ActivitySheet::where('id', $id)->update($data);
        toastr()->success('Activity sheet updated successfully!', 'Congrats');
        return redirect()->route('activity_sheet.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/activity_sheet', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/activity_sheet/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
