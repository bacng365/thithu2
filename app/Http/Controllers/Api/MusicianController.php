<?php

namespace App\Http\Controllers\Api;

use App\Models\Musician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicianController extends Controller
{
    public function index() {
        $musicians = Musician::all();
        return response()->json([
            'data' => $musicians,
            'message' => 'success'
        ], 200);
    }

    public function store(Request $request) {
        $newMusician = Musician::create([
            "name" => $request->name,
            "profile_picture" => null,
            "birth_date" => $request->birth_date,
            "instrument" => $request->instrument,
            "biography" => $request->biography,
        ]);

        return response()->json([
            'data' => $newMusician,
            'message' => 'success'
        ], 200);
    }

    public function update(Musician $musician, Request $request) {
        $musician->update([
            "name" => $request->name,
            "profile_picture" => null,
            "birth_date" => $request->birth_date,
            "instrument" => $request->instrument,
            "biography" => $request->biography,
        ]);

        return response()->json([
            'data' => $musician,
            'message' => 'success'
        ], 200);
    }

    public function destroy(Musician $musician) {
        $musician->delete();
        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
