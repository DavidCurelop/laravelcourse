<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: David Curelop";
    return view('home.about')->with("title", $data1)

        ->with("subtitle", $data2)

        ->with("description", $description)

        ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = "About us - Contact";
    $data2 = "Contact Info";
    $email = "dcurelop@gmail.com";
    $address = "Calle 123, Medellin";
    $number = "+57 300 000 0000";
    return view('home.contact')->with("title", $data1)

        ->with("subtitle", $data2)

        ->with("email", $email)

        ->with("address", $address)

        ->with("number", $number);
})->name("home.contact");

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/save', [ProductController::class, 'save'])->name('product.save');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");