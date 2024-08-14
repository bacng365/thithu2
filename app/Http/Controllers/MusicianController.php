<?php

namespace App\Http\Controllers;

use App\Models\Musician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusicianController extends Controller
{
    public function index() {
        $musicians = Musician::all();
        return view('musicians.index', compact('musicians'));
    }

    public function create() {
        return view('musicians.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'profile_picture' => 'required',
            'birth_date' => 'required',
            'instrument' => 'required',
            'biography' => 'required',
        ]);

        if ($request->has('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('musicians', 'public');
        }

        Musician::create([
            "name" => $request->name,
            "profile_picture" => $profilePicturePath,
            "birth_date" => $request->birth_date,
            "instrument" => $request->instrument,
            "biography" => $request->biography,
        ]);

        return redirect()->route('musicians.index');
    }


    public function edit(Musician $musician) {
        return view('musicians.edit', compact('musician'));
    }

    public function update(Musician $musician, Request $request) {
        $request->validate([
            'name' => 'required',
            'profile_picture' => 'required',
            'birth_date' => 'required',
            'instrument' => 'required',
            'biography' => 'required',
        ]);

        $profilePicturePath = $musician->profile_picture;
        if ($request->has('profile_picture')) {
            Storage::disk('public')->delete($musician->profile_picture);
            $profilePicturePath = $request->file('profile_picture')->store('musicians', 'public');
        }

        $musician->update([
            "name" => $request->name,
            "profile_picture" => $profilePicturePath,
            "birth_date" => $request->birth_date,
            "instrument" => $request->instrument,
            "biography" => $request->biography,
        ]);

        return redirect()->route('musicians.index');
    }

    public function destroy(Musician $musician) {
        $musician->delete();
        return redirect()->route('musicians.index');
    }
}
