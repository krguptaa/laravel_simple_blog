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
Route::get('/', 'PostsController@index');
Auth::routes();
Route::get('/home', 'PostsController@index');
Route::get('/posts/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts/store','PostsController@store');
Route::get('/posts/show/{post}','PostsController@show');
Route::post('/posts/{post}/comments','CommentsController@store');
// get the mail html directly
Route::get('/mail',function(){
	return new App\Mail\WelcomeAgain;
});

Route::get('datatables', 'DatatablesController@getIndex');
Route::get('get-data-datatables', ['as'=>'get.data','uses'=>'DatatablesController@anyData']);


Route::get('/posts/postgrid','PostsController@postgrid');
Route::get('ajaxlist-posts',['as'=>'posts.ajaxlist','uses' => 'PostsController@ajaxlist']);