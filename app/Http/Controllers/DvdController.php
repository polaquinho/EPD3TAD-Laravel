<?php

namespace App\Http\Controllers;

use App\Models\Dvd;
use Illuminate\Http\Request;

class DvdController extends Controller
{
    public function show_details($id){
        $dvd = Dvd::find($id);
        return view("showDetails", compact("dvd"));
    }
}
