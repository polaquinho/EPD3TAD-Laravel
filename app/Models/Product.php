<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "number",
        "price"
    ];

    // 1 to many inverse product-videoStore at model level
    public function videoStore(){
        return $this->belongsTo('App\Models\VideoStore');
    }

     // 1 to many inverse product-client at model level
     public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    //1 to 1
    public function video_tape(){
        return $this->hasOne('App\Models\VideoTape');
    }

    public function dvd(){
        return $this->hasOne('App\Models\Dvd');
    }

    public function game(){
        return $this->hasOne('App\Models\Game');
    }
}
