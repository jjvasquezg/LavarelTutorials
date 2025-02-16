<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Juan Jose Vasquez";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");

Route::get('/contact', function () {
    $data1 = 'Contact Us - Online Store';
    $data2 = 'Contact Us';
    $email = "contact@gmail.com";
    $address = "34 Street 3882";
    $phoneNumber = "+1 838 8282 9392";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("email", $email)
      ->with("address", $address)
      ->with("phoneNumber", $phoneNumber);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/product/success', function () {
  $message = session('success');
  return view('product.success')->with('message', $message);
})->name('product.success');


