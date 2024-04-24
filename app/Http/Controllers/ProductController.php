<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dvd;
use App\Models\Game;
use App\Models\Product;
use App\Models\VideoStore;
use App\Models\VideoTape;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products_price($id){
        $product = Product::find($id);
        return back()->with("price_message","The product price is ".$product->price);
    }

    public function products_price_vat($id){
        $product = Product::find($id);
        $product_price_vat = ($product->price*0.21)+$product->price;
        return back()->with("price_vat_message","The product price with VAT is ".$product_price_vat);
    }

    public function products_number($id){
        $product = Product::find($id);
        return back()->with("product_number_message","The product number is ".$product->number);
    }

    public function showProducts(){
        $videoTapes = VideoTape::all();
        $dvds = Dvd::all();
        $games = Game::all();
        return view("products",compact("videoTapes","dvds","games"));
    }

}
