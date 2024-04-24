<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    use HasFactory;

    protected $fillable = [
        "language",
        "screanFormat"
    ];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
