<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth.admin'],function(){
//addCart
Route::get('/addCart/{id?}','CartController@addCart')->name('addCart');
Route::get('/cart-index','CartController@index')->name('cart.index');
Route::get('/cart-checkout','CartController@checkout')->name('cart.checkout');



Route::get('/send-mail','ProductController@sendMail')->name('sendMail');
Route::get('/user-order','OrderController@index')->name('user.order');
Route::get('/user-orderr','OrderController@show')->name('admin.order.show');


Route::post('/cart_checkout_shipping','CartController@shipping')->name('checkout.shipping');

Route::get('payment', 'OrderController@paymentIndex')->name('payment.index');

});

