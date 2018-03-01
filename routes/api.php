<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Use App\Book;
 
Route::get('books', 'BookController@index');
Route::get('books/{book}', 'BookController@show'); // also retrieve reader info and comments
Route::get('books/search/{keyword}', 'BookController@search'); //search
Route::post('books', 'BookController@store');
// book's search
//Route::put('books/{book}', 'BookController@update');
//Route::delete('books/{book}', 'BookController@delete');

Use App\Reader;
 
Route::get('readers', 'ReaderController@index');
Route::get('readers/{reader}', 'ReaderController@show');
Route::post('readers', 'ReaderController@store');
Route::put('readers/{reader}', 'ReaderController@update');
//Route::delete('readers/{reader}', 'ReaderController@delete');

Use App\Comment;
 
Route::get('comments', 'CommentController@index');
Route::get('comments/{book}', 'CommentController@show');
Route::post('comments', 'CommentController@store');
//Route::put('comments/{comment}', 'CommentController@update');
//Route::delete('comments/{comment}', 'CommentController@delete');
