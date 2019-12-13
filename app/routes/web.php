<?php
use App\Http\Middleware\HelloMiddleware;
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

// CodeCreate課題
Route::get('/check', 'CodeCreateController@contact');
Route::get('/contact', 'CodeCreateController@check');
Route::post('/contact', 'CodeCreateController@check');

Route::get('/test', 'TestController@index');

// 認証
Auth::routes();

// Laravel青本のコード
// hello
Route::get('/hello', 'HelloController@index');
    // ->middleware(HelloMiddleware::class);
Route::post('/hello', 'HelloController@post');

Route::get('/hello/add', 'HelloController@add');
Route::post('/hello/add', 'HelloController@create');
Route::get('/hello/edit', 'HelloController@edit');
Route::post('/hello/edit', 'HelloController@update');
Route::get('/hello/del', 'HelloController@del');
Route::post('/hello/del', 'HelloController@remove');
Route::get('/hello/show', 'HelloController@show');

// person
Route::get('/person', 'PersonController@index');
Route::get('/person/find', 'PersonController@find');
Route::post('/person/find', 'PersonController@search');
Route::get('/person/add', 'PersonController@add');
Route::post('/person/add', 'PersonController@create');
Route::get('/person/edit', 'PersonController@edit');
Route::post('/person/edit', 'PersonController@update');
Route::get('/person/del', 'PersonController@delete');
Route::post('/person/del', 'PersonController@remove');

// board
Route::get('/board', 'BoardController@index');
Route::get('/board/add', 'BoardController@add');
Route::post('/board/add', 'BoardController@create');

// Restful
Route::resource('rest', 'RestappController');