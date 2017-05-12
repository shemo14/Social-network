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

Route::get('/', function () {
    if (\Illuminate\Support\Facades\Auth::check()){
        return view('home');
    }else return redirect('login');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth','admin']],function (){
   Route::get('group',function (){
      return view('groups.index');
   });
    Route::get('posts',function (){
        return view('posts.index');
    });
   Route::post('group/{id}/update','GroupsController@update');
   Route::get('group/{id}','GroupsController@destroy');
    Route::resource('groups','GroupsController');
    Route::resource('posts','PostsController');
   Route::resource('chat','ChatRoom');


});

Auth::routes();

Route::get('/home', 'HomeController@index');
