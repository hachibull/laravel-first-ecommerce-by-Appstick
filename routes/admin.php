<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth.admin'],function(){

    Route::get('/admin-main','AdminController@index')->name('admin.index');
    //brand
    Route::get('/admin-brand-create','BrandController@create')->name('admin.brand.create');
    Route::post('/admin-brand-store','BrandController@store')->name('admin.brand.store');
    Route::get('/admin-brand-index','BrandController@index')->name('admin.brand.index');
    
    Route::get('/admin-brand-edit/{id}', 'BrandController@edit')->name('admin.brand.edit');
    Route::get('/admin-brand-delete/{id}', 'BrandController@delete')->name('admin.brand.delete');
    Route::get('/admin-brand-show/{id}', 'BrandController@show')->name('admin.brand.show');
    Route::post('/brand-update','BrandController@update')->name('admin.brand.update');
    Route::get('/admin-logout','AdminController@logout')->name('admin.logout');
    
    //discount
    Route::get('/admin-discount-index','DiscountController@index')->name('admin.discount.index');
    
    Route::get('/admin-discount-edit/{id}', 'DiscountController@edit')->name('admin.discount.edit');
    Route::get('/admin-discount-delete/{id}', 'DiscountController@delete')->name('admin.discount.delete');
    Route::get('/admin-discount-show/{id}', 'DiscountController@show')->name('admin.discount.show');
    Route::get('/admin-discount-create','DiscountController@create')->name('admin.discount.create');
    Route::post('/admin-discount-store','DiscountController@store')->name('admin.discount.store');
    Route::post('/admin-discount-update','DiscountController@update')->name('admin.discount.update');
    
    //trend
    Route::get('/admin-trend-index','TrendFashionController@index')->name('admin.trend.index');
    
    Route::get('/admin-trend-edit/{id}', 'TrendFashionController@edit')->name('admin.trend.edit');
    Route::get('/admin-trend-delete/{id}', 'TrendFashionController@delete')->name('admin.trend.delete');
    Route::get('/admin-trend-show/{id}', 'TrendFashionController@show')->name('admin.trend.show');
    Route::get('/admin-trend-create','TrendFashionController@create')->name('admin.trend.create');
    Route::post('/admin-trend-store','TrendFashionController@store')->name('admin.trend.store');
    Route::post('/admin-trend-update','TrendFashionController@update')->name('admin.trend.update');
    
    //slider
    Route::get('/admin-slider-index','SliderController@index')->name('admin.slider.index');
    
    Route::get('/admin-slider-edit/{id}', 'SliderController@edit')->name('admin.slider.edit');
    Route::get('/admin-slider-delete/{id}', 'SliderController@delete')->name('admin.slider.delete');
    Route::get('/admin-slider-show/{id}', 'SliderController@show')->name('admin.slider.show');
    Route::get('/admin-slider-create','SliderController@create')->name('admin.slider.create');
    Route::post('/admin-slider-store','SliderController@store')->name('admin.slider.store');
    Route::post('/admin-slider-update','SliderController@update')->name('admin.slider.update');
    
    //category
    Route::get('/admin-category-index','CategoryController@index')->name('admin.category.index');
    
    Route::get('/admin-category-edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
    Route::get('/admin-category-delete/{id}', 'CategoryController@delete')->name('admin.category.delete');
    Route::get('/admin-category-show/{id}', 'CategoryController@show')->name('admin.category.show');
    Route::get('/admin-category-create','CategoryController@create')->name('admin.category.create');
    Route::post('/admin-category-store','CategoryController@store')->name('admin.category.store');
    Route::post('/admin-category-update','CategoryController@update')->name('admin.category.update');
    
    //subCategory
    Route::get('/admin-subcategory-index','SubCategoryController@index')->name('admin.sub_category.index');
    
    Route::get('/admin-subcategory-edit/{id}', 'SuhbCategoryController@edit')->name('admin.sub_category.edit');
    Route::get('/admin-subcategory-delete/{id}', 'SubCategoryController@delete')->name('admin.sub_category.delete');
    Route::get('/admin-subcategory-show/{id}', 'SubCategoryController@show')->name('admin.sub_category.show');
    Route::get('/admin-subcategory-create','SubCategoryController@create')->name('admin.sub_category.create');
    Route::post('/admin-subcategory-store','SubCategoryController@store')->name('admin.sub_category.store');
    Route::post('/admin-subcategory-update','SubCategoryController@update')->name('admin.sub_category.update');
    
    //products
    Route::get('/admin-product-index','ProductController@index')->name('admin.product.index');
    
    Route::get('/admin-product-edit/{id}', 'ProductController@edit')->name('admin.product.edit');
    Route::get('/admin-product-delete/{id}', 'ProductController@delete')->name('admin.product.delete');
    Route::get('/admin-product-show/{id}', 'ProductController@show')->name('admin.product.show');
    Route::get('/admin-product-create','ProductController@create')->name('admin.product.create');
    Route::post('/admin-product-store','ProductController@store')->name('admin.product.store');
    Route::post('/admin-product-update','ProductController@update')->name('admin.product.update');
    
    Route::post('/sub_category','ProductController@subcategory')->name('sub_category');



});