<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nav', function () {
    return view('navbar');
});
// Route::get('/view/{id}', function () {
//     return view('prodectview', compact('id'));
// });
Route::get('/view/{id}', function ($id) {
    return view('prodectview', compact('id'));
});
Route::get('/addtocart/{id}', function ($id) {
    return view('addtocart', compact('id'));
});
Route::get('/payment/{id}', function ($id) {
    return view('payment', compact('id'));
});
// Route::get('/view/{id}', function ($id) {
//     // Find the product by ID from one of your arrays (e.g., $products, $mobiles, etc.)
//     // Here, we'll use $products as an example
//     $productData = collect($products)->firstWhere('id', $id);

//     // Pass the product data to the Blade view
//     return view('productview', compact('productData'));
// });
// Route::get('/view/{id}',  [CompanyController::class, 'view']);
Route::post('/view/{id}',  [CompanyController::class, 'view1']);
