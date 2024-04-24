<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "number",
        "amount_of_rent",
        "maxRent"
    ];

    // 1 to many client-product at model level
    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    // 1 to many inverse client-videoStore at model level
    public function videoStore(){
        return $this->belongsTo('App\Models\VideoStore');
    }
}
