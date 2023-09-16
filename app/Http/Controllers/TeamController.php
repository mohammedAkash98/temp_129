<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(10);


        return view('backend.team.team-index', compact('teams'));
    }
    public function create()
    {
        return view('backend.team.team-create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        if ($request->image) {
            $image = $this->uploadImage($request->name, $request->image);
            $data['image'] = $image;
        }

        Team::create($data);
        toastr()->success('Team created successfully!', 'Congrats');
        return redirect()->route('team.index');
    }

    public function delete($id)
    {
        $team =  Team::where('id', $id)->first();


        if ($team->image) {
            $this->unlink($team->image);
        }

        $team->delete();
        toastr()->error('Team deleted!', 'Delete');
        return redirect()->back();
    }

    public function info($id)
    {
        $team = Team::find($id);
        return view('backend.team.team-info', compact('team'));
    }

    public function edit($id)
    {
        $team = Team::find($id);

        return view('backend.team.team-edit', compact('team'));
    }


    public function update(Request $request, $id)
    {

        $data = $request->except('_token');


        if ($request->hasFile('image')) {
            $team = Team::where('id', $id)->first();

            $this->unlink($team->image);

            $data['image'] = $this->uploadImage($request->name, $request->image);
        }


        Team::where('id', $id)->update($data);
        toastr()->success('Team updated successfully!', 'Congrats');
        return redirect()->route('team.index');
    }
    public function uploadImage($title, $image)
    {

        $file_name = time() . '-' . $title . '.' . $image->getClientOriginalExtension();

        $image->move('storage/team', $file_name);

        return $file_name;
    }
    private function unlink($image)
    {
        $pathToUpload = storage_path() . '/app/public/team/';
        if ($image != '' && file_exists($pathToUpload . $image)) {
            @unlink($pathToUpload . $image);
        }
    }
}
