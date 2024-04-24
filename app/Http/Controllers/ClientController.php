<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dvd;
use App\Models\Game;
use App\Models\Product;
use App\Models\VideoTape;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function choose_client()
    {
        return view("choose_client");
    }

    public function choosen_client(Request $request)
    {
        try {
            // $client = Client::findOrFail($request->choose_client);
            $request->validate(["choose_client"=>"required"]);
            $client = Client::where('number', $request->choose_client)->get()->first();
            $products = Product::where('client_id', $client->id)->get();
            return $this->showDetails($client, $products);
        } catch (ModelNotFoundException $e) {
            return back()->with('message', 'Client not found');
        }
    }

    public function rent_products($id)
    {
        $client = Client::findOrFail($id);
        $unrented_products = Product::where('client_id', null)->get();
        return view('client_rent', compact('client', 'unrented_products'));
    }

    public function product_rented($unrented_product_id, $client_id)
    {
        $client = Client::findOrFail($client_id);
        if ($client->amount_of_rent == $client->maxRent) {
            return back()->with('message', 'You reach the maximun products to rent');
        } else {
            $product = Product::findOrFail($unrented_product_id);
            $product->client_id = $client_id;
            $product->save();
            $client->amount_of_rent += 1;
            $client->save();
            $unrented_products = Product::where('client_id', null)->get();
            return view('client_rent', compact('client', 'unrented_products'));
        }
    }

    public function product_returned($product_id, $client_id)
    {
        $product = Product::findOrFail($product_id);
        $product->client_id = null;
        $product->save();
        $client = Client::findOrFail($client_id);
        $client->amount_of_rent -= 1;
        $client->save();
        return back()->with('message', 'Returned product successfully');
    }

    public function rented($id)
    {
        $client = Client::findOrFail($id);
        $videoTapes = VideoTape::all();
        $dvds = Dvd::all();
        $games = Game::all();
        return view("all_products", compact("videoTapes", "dvds", "games", "client"));
    }

    public function rented_question($client_id, Request $request)
    {
        $products = Product::where("title", $request->client_product)->get()->first();
        if ($products["client_id"] == (int)($client_id)) {
            return back()->with("message", "This game is rented by you");
        } else {
            return back()->with("message", "This game is not rented by you");
        }
    }

    public function showDetails(Client $c, Object $products)
    {
        $client = $c;
        return view("client", compact("client", "products"));
    }
}
