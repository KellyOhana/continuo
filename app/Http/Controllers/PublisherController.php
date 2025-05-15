<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller{

    public function index(){

        $publishers = Publisher::all();

        // $publishers = Publisher::with(['games', 'developers'])->get();

        return response()->json($publishers);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string',
            'about' => 'string',
        ]);

        $publisher = Publisher::create($validated);

        return response()->json([
            'message' => 'Distribuidora criada com sucesso',
            'publisher'=> $publisher
        ]);
    }

    public function show($id){

        $publisher = Publisher::findOrFail($id);

        // $publisher = Publisher::with(['games', 'developers'])->findOrFail($id);

        return response()->json($publisher);
    }

    public function update(Request $request, $id){

        $publisher = Publisher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string',
            'about' => 'string',
        ]);

        $publisher->update($validated);

        return response()->json($publisher);
    }

    public function destroy($id){

        $publisher = Publisher::findOrFail($id);
        $publisher->delete();

        return response()->json(null, 204);

    }
}