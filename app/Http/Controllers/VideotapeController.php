<?php

namespace App\Http\Controllers;

use App\Models\VideoTape;
use Illuminate\Http\Request;

class VideotapeController extends Controller
{
    public function show_details($id){
        $videotape = VideoTape::find($id);
        return view("showDetails", compact("videotape"));
    }
}
