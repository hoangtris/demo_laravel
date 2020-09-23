<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', 'PagesController@about');


//model
Route::get('model/save', function(){
	$user = new App\User();
	$user->name = "Mai";
	$user->email = "Mail@gmail.com";
	$user->password = "123";

	$user->save();

	echo "Da save()";
});



route::get('model/post/save/{title}', function($title){
	$post= new App\Post();

	$post->title = $title;
	$post->content= "sjvbsjhbvjkbbhg";

	$post->save();

	echo "Thanh cong";
});

Route::get('post/all','PostController@index');

Route::get('post/chitiettin/{id}','PostController@show');