<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::latest()->paginate(10);
        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'jersey_number' => 'required|integer|min:1|max:99',
            'nationality' => 'required|string|max:255',
            'age' => 'required|integer|min:16|max:50'
        ]);

        Player::create($validated);

        return redirect()->route('players.index')
            ->with('success', 'Player created successfully.');
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'jersey_number' => 'required|integer|min:1|max:99',
            'nationality' => 'required|string|max:255',
            'age' => 'required|integer|min:16|max:50'
        ]);

        $player->update($validated);

        return redirect()->route('players.index')
            ->with('success', 'Player updated successfully.');
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully.');
    }
} 