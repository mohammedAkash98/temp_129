<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function index()
    {
        $home_contents = HomeContent::paginate(10);


        return view('backend.home_content.home_content-index', compact('home_contents'));
    }
    public function create()
    {
        return view('backend.home_content.home_content-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        HomeContent::create($data);
        toastr()->success('Home content created successfully!', 'Congrats');
        return redirect()->route('home_content.index');
    }

    public function delete($id)
    {
        $home_content =  HomeContent::where('id', $id)->first();
        $home_content->delete();
        toastr()->error('Home content deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $home_content = HomeContent::find($id);
        return view('backend.home_content.home_content-info', compact('home_content'));
    }

    public function edit($id)
    {
        $home_content = HomeContent::find($id);

        return view('backend.home_content.home_content-edit', compact('home_content'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        HomeContent::where('id', $id)->update($data);
        toastr()->success('Home content updated successfully!', 'Congrats');
        return redirect()->route('home_content.index');
    }
}
