<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ProductsController@displayProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::post('/products', 'ProductsController@store')->name('product.store');
Route::get('/sell', 'ProductsController@create')->name('product.create');

Route::get('delete_user_product/{product}','ProductsController@deleteProduct');
Route::get('/productView/{product}',"ProductsController@displayImages");
Route::view('/profile','seller.profile')->name('profile')->middleware('auth');
Route::get('api/users', 'UsersController@index');
Route::post('api/messages', 'MessagesController@index');
Route::post('api/messages/send', 'MessagesController@store');

});



Route::group(['prefix'=>'user','as'=>'user.'],function(){
Route::post('upload_avatar','ProductsController@uploadAvatar')->name('upload_avatar');
Route::post('update_user_data','ProductsController@updateUserData')->name('update_user_data');


});

Route::get('/welcome','ProductsController@displayProducts')->name('welcome');
Route::get('/welcome/{cat}','ProductsController@displayCategoryProducts');
Route::post('/welcome/search','ProductsController@searchProduct')->name('welcome.search');



Route::view('/posts',"seller.posts")->name('posts');



