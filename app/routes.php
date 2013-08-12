<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('authors',array('as'=>'authors','uses'=>'Authors@index'));
Route::get('author/{id}', array('as'=>'author','uses'=>'Authors@view'));
Route::get('authors/newAuthor', array('as'=>'newAuthor','uses'=>'Authors@newAuthor'));
Route::post('authors/create',array('uses'=>'Authors@create'));
Route::get('authors/{id}',array('as'=>'edit','uses'=>'Authors@edit'));
Route::put('author/update',array('uses'=>'Authors@update'));
Route::delete('author/delete',array('uses'=>'Authors@delete'));
