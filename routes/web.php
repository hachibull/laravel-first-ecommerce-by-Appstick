<?php

use Illuminate\Support\Facades\Route;

//front
Route::get('/', 'HomeController@home')->name('front.main');
//admin
Route::get('/login','AdminController@login')->name('admin.login');
Route::post('/admin-loginCheck','AdminController@loginCheck')->name('admin.loginCheck');
Route::get('/signup','AdminController@signup')->name('admin.signup');
Route::post('/admin-registration','AdminController@UserRegistration')->name('admin.UserRegistration');

Route::get('stripe', 'StripeController@stripe');
Route::post('payment', 'StripeController@payStripe');










