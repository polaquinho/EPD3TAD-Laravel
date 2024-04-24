<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dvd;
use App\Models\Game;
use App\Models\Product;
use App\Models\VideoStore;
use App\Models\VideoTape;
use Illuminate\Http\Request;

class VideoStoreController extends Controller
{
    public function videostore()
    {
        $videostore = VideoStore::find(1);
        $products = Product::all();
        // $products = Product::paginate(5);
        $clients = Client::all();
        return view("index", compact("products", "clients", "videostore"));
    }

    public function choose_product_videoStore()
    {
        return view("product_choose");
    }

    public function create_product(Request $request)
    {
        $product = $request->input("choose_product");
        if ($product == "videotape") {
            return view("createVideoTape");
        } else if ($product == "dvd") {
            return view("createDvd");
        } else {
            return view("createGame");
        }
    }

    public function create_videotape(Request $request)
    {

        $request->validate(['title'=>'required', 'price'=> 'required', 'duration'=> 'required']);

        // We create this loop to check if the random number exists in the database or not
        $randomNumber = random_int(1, 1000000);
        $numberExists = Product::where("number", $randomNumber)->exists();
        while ($numberExists) {
            $randomNumber = random_int(1, 1000000);
            $numberExists = Product::where("number", $randomNumber)->exists();
        }

        $videostore = VideoStore::find(1);

        $newProduct = new Product();
        $newProduct->title = $request->title;
        $newProduct->number = $randomNumber;
        $newProduct->price = $request->price;
        $newProduct->videoStore_id = $videostore->id;
        $newProduct->save();

        $lastProduct = Product::orderBy("id", "desc")->first();
        $newVideoTape = new VideoTape();
        $newVideoTape->duration = $request->duration;
        $newVideoTape->product_id = $lastProduct->id;
        $newVideoTape->save();

        if ($newProduct->save()) {
            $videostore->productsNumber += 1;
            $videostore->save();
            return back()->with('message', 'Product added successfully');
        }
    }

    public function create_dvd(Request $request)
    {
        $request->validate(['title'=>'required', 'price'=> 'required', 'language'=> 'required','screanFormat'=> 'required']);
        // We create this loop to check if the random number exists in the database or not
        $randomNumber = random_int(1, 1000000);
        $numberExists = Product::where("number", $randomNumber)->exists();
        while ($numberExists) {
            $randomNumber = random_int(1, 1000000);
            $numberExists = Product::where("number", $randomNumber)->exists();
        }

        $videostore = VideoStore::find(1);

        $newProduct = new Product();
        $newProduct->title = $request->title;
        $newProduct->number = $randomNumber;
        $newProduct->price = $request->price;
        $newProduct->videoStore_id = $videostore->id;
        $newProduct->save();

        $lastProduct = Product::orderBy("id", "desc")->first();
        $newDvd = new Dvd();
        $newDvd->language = $request->language;
        $newDvd->screanFormat = $request->screanFormat;
        $newDvd->product_id = $lastProduct->id;
        $newDvd->save();

        if ($newProduct->save()) {
            $videostore->productsNumber += 1;
            $videostore->save();
            return back()->with('message', 'Product added successfully');
        }
    }

    public function create_game(Request $request)
    {
        $request->validate(['title'=>'required', 'price'=> 'required', 'console'=> 'required', 'minPlayers'=> 'required', 'maxPlayers'=> 'required']);
        // We create this loop to check if the random number exists in the database or not
        $randomNumber = random_int(1, 1000000);
        $numberExists = Product::where("number", $randomNumber)->exists();
        while ($numberExists) {
            $randomNumber = random_int(1, 1000000);
            $numberExists = Product::where("number", $randomNumber)->exists();
        }

        $videostore = VideoStore::find(1);

        $newProduct = new Product();
        $newProduct->title = $request->title;
        $newProduct->number = $randomNumber;
        $newProduct->price = $request->price;
        $newProduct->videoStore_id = $videostore->id;
        $newProduct->save();

        $lastProduct = Product::orderBy("id", "desc")->first();
        $newGame = new Game();
        $newGame->console = $request->console;
        $newGame->minPlayers = $request->minPlayers;
        $newGame->maxPlayers = $request->maxPlayers;
        $newGame->product_id = $lastProduct->id;
        $newGame->save();

        if ($newProduct->save()) {
            $videostore->productsNumber += 1;
            $videostore->save();
            return back()->with('message', 'Product added successfully');
        }
    }

    public function new_client()
    {
        return view('create_client');
    }

    public function create_client(Request $request)
    {
        $request->validate(['name'=>'required']);
        // We create this loop to check if the random number exists in the database or not
        $randomNumber = random_int(1, 1000000);
        $numberExists = Product::where("number", $randomNumber)->exists();
        while ($numberExists) {
            $randomNumber = random_int(1, 1000000);
            $numberExists = Product::where("number", $randomNumber)->exists();
        }

        $videostore = VideoStore::find(1);

        $newClient = new Client();
        $newClient->name = $request->name;
        $newClient->number = $randomNumber;
        $newClient->amount_of_rent = 0;
        $newClient->maxRent = 3;
        $newClient->videoStore_id = $videostore->id;
        $newClient->save();

        $videostore->clientsNumber++;
        $videostore->save();
        return back()->with('message', 'Client added successfully');
    }

    // Me falta escribir aqui el metodo de alquilarSocioProducto(numeroCliente, numeroSoporte)

    public function delete_client($id){
        $delete_client = Client::findOrFail( $id );
        $delete_client->delete();

        $videostore = VideoStore::find(1);
        $videostore->clientsNumber -= 1;
        $videostore->save();

        return back()->with('delete_client_message','Deleted client');
    }

    public function delete_product($id){
        $delete_product = Product::findOrFail( $id );
        $delete_product->delete();

        $videostore = VideoStore::find(1);
        $videostore->productsNumber -= 1;
        $videostore->save();

        return back()->with('delete_product_message','Deleted product');
    }
}
