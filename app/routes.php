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

Route::get('/practice', function() {
  echo App::environment();
});

Route::post('/lorem-ipsum', function() 
{
  $validator = Validator::make(
    array('num_paragraphs' =>'required|between:1,5'),Input::all()
  );
  if ($validator->fails()) {
    //return  View::make('/welcome');
  }
  return View::make('lorem-ipsum');
});

Route::get('lorem-ipsum', function()
{
  return View::make('lorem-ipsum');
});
Route::get('/welcome', function()
{
	return View::make('welcome');
});

