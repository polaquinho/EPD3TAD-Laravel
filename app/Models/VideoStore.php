<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoStore extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "productsNumber",
        "clientsNumber"
    ];

    // 1 to many relation videoStore->product at model level
    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    // 1 to many relation videoStore->client at model level
    public function clients(){
        return $this->hasMany('App\Models\Client');
    }
}
