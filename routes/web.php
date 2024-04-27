<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});


Route::get('/products', function () {
    $products = Product::get();

    return view('product_list', [
        'products' => $products ?? [],
    ]);
});


Route::get('/products/create', function () {
    return view('product_create', [
    ]);
});

Route::post('/products', function () {
    Product::create([
        'name' => request('name'),
        'description' => request('description'),
        'regular_price' => request('regular_price'),
        'sale_price' => request('sale_price'),
        'colorway' => request('color'),
        'quantity' => request('quantity'),
        'images' =>  request('images'),
    ]);

    return redirect('/products');
});

Route::get('/products/{product}', function ($product) {
    $product = Product::findOrFail($product);
    
    return view('product_modify', [
        'product' => $product,
    ]);
});

Route::patch('/products/{id}', function ($id) {
    $product = Product::findOrFail($id);
    
    $product->update([ 
        'name' => request('name'),
        'description' => request('description'),
        'regular_price' => request('regular_price'),
        'sale_price' => request('sale_price'),
        'colorway' => request('color'),
        'quantity' => request('quantity'),
        'images' =>  request('images'),
    ]);

    redirect('/products');
});