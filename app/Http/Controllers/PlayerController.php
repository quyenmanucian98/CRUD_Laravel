<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function listPlayers()
    {
        $players = Player::all();
        return view('listPlayer', compact("players"));
    }

    public function formAdd()
    {
        return view('formAdd');
    }

    public function addPlayer(Request $request)
    {
        $players = Player::all();
        $players = new Player();
        $players->name = $request->name;
        $players->age = $request->age;
        $players->nationality = $request->nationality;
        $players->save();
        return redirect()->route('players.list');
    }

    public function deletePlayer($id)
    {
        $playres = Player::findOrFail($id);
        $playres->delete();

        return redirect()->route('players.list');
    }

    public function editPlayer($id)
    {
        $player = Player::findOrFail($id);
        return view('edit', compact("player"));
    }

    public function updatePlayer(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->name = $request->name;
        $player->age = $request->age;
        $player->nationality = $request->nationality;
        $player->save();
        return redirect()->route('players.list');
    }
}
