<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller{

    public function index(){

        $developers = Developer::all();

        return response()->json($developers);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string',
            'about' => 'string',
            'publisher_id' => 'required|exists:App\Models\Publisher,id',
        ]);

        $developer = Developer::create($validated);

        return response()->json($developer);
    }

    public function show($id){

        $developer = Developer::findOrFail($id);

        return response()->json($developer);
    }

    public function update(Request $request, $id){

        $developer = Developer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'about' => 'string',
        ]);

        $developer->update($validated);

        return response()->json($developer);
    }

    public function destroy($id){

        $developer = Developer::findOrFail($id);
        $developer->delete();

        return response()->json(null, 204);

    }
}