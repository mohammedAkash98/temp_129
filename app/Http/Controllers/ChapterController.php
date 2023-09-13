<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();

        return view('backend.chapter.chapter-index', compact('chapters'));
    }

    public function create()
    {
        return view('backend.chapter.chapter-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Chapter::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
        ]);
        return redirect()->route('chapter.index');
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        return view('backend.chapter.chapter-edit', compact('chapter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $chapter = Chapter::where('id', $id)->first();

        $chapter->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
        ]);
        return redirect()->route('chapter.index');
    }
}
