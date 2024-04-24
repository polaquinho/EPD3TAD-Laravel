<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTape extends Model
{
    use HasFactory;

    protected $fillable = [
        "duration"
    ];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
