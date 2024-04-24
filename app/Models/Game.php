<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        "console",
        "minPlayers",
        "maxPlayers"
    ];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
