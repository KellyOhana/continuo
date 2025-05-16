<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();

        return response()->json([
            'games' => $games,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'platform' => 'required|array|max:100',
            'genre' => 'required|array|max:100',
            'status' => 'string|max:50',
            'released_at' => 'required|date',
            'publisher_id' => 'required|exists:App\Models\Publisher,id',
            'developer_id' => 'required|exists:App\Models\Developer,id',
        ]);

        $game = Game::create($validatedData);

        return response()->json([
            'message' => 'Jogo criado com sucesso',
            'game' => $game,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return response()->json([
            'game' => $game,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'platform' => 'sometimes|string|max:255',
            'genre' => 'sometimes|string|max:255',
            'status' => 'sometimes|string|max:255',
            'released_at' => 'sometimes|date',
        ]);

        $game->update($validatedData);

        return response()->json([
            'game' => $game,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response()->json([
            'message' => 'Game deleted successfully',
        ], 204);
    }
}
