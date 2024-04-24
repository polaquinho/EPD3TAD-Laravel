<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show_details($id){
        $game = Game::find($id);
        return view("showDetails", compact("game"));
    }
}
