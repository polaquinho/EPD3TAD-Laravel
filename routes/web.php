<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DvdController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VideoStoreController;
use App\Http\Controllers\VideotapeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [VideoStoreController::class,'videostore'])->name('videostore.index');
Route::get('choose_product', [VideoStoreController::class,'choose_product_videoStore'])->name('videostore.choose_product');
Route::get('chosen_product', [VideoStoreController::class,'create_product'])->name('videostore.chosenproduct');
Route::post('create_videoTape', [VideoStoreController::class,'create_videotape'])->name('videostore.createvideotape');
Route::post('create_dvd', [VideoStoreController::class,'create_dvd'])->name('videostore.createdvd');
Route::post('create_game', [VideoStoreController::class,'create_game'])->name('videostore.creategame');
Route::get('new_client', [VideoStoreController::class,'new_client'])->name('videostore.newclient');
Route::post('create_client', [VideoStoreController::class,'create_client'])->name('videostore.createclient');
Route::delete('delete_client/{id}', [VideoStoreController::class,'delete_client'])->name('videostore.deleteclient');
Route::delete('delete_product/{id}', [VideoStoreController::class,'delete_product'])->name('videostore.deleteproduct');

Route::get('client_select', [ClientController::class,'choose_client'])->name('client.choose_client');
Route::get('client_details', [ClientController::class,'choosen_client'])->name('client.choosen_client');
Route::get('client_rent_products/{id}', [ClientController::class,'rent_products'])->name('client.rent_products');
Route::put('product_rented_by_client/{unrented_product_id}/{client_id}', [ClientController::class,'product_rented'])->name('client.rented_products');
Route::put('product_returned_by_client/{product_id}/{client_id}', [ClientController::class,'product_returned'])->name('client.returned_products');
Route::get('client_rent_products_question/{id}', [ClientController::class,'rented'])->name('client.rent_product_question');
Route::get('client_rented_products_question/{client_id}', [ClientController::class,'rented_question'])->name('client.rented_product_question');

Route::get('products', [ProductController::class,'showProducts'])->name('products.show');
Route::get('products_price/{id}', [ProductController::class,'products_price'])->name('products.products_price');
Route::get('products_price_vat/{id}', [ProductController::class,'products_price_vat'])->name('products.products_price_vat');
Route::get('products_number/{id}', [ProductController::class,'products_number'])->name('products.products_number');

Route::get('videotape_show_details/{id}', [VideotapeController::class,'show_details'])->name('videotape.show_details');

Route::get('dvd_show_details/{id}', [DvdController::class,'show_details'])->name('dvd.show_details');

Route::get('game_show_details/{id}', [GameController::class,'show_details'])->name('game.show_details');





