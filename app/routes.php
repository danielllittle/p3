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
        array('num_paragraphs' => array('required','between:1,5'))
  );
  if ($validator->fails()) {
    //return  View::make('/welcome');
  }
  return View::make('lorem-ipsum');
});

Route::get('user-generator', function()
{
    $legislators = File::get(app_path().'/database/legislators.json');
    $legislators = json_decode($legislators, true);
    //$rand_keys = array_rand($input, 2);
    $firstname = $legislators['objects'][0]['party'];
    return View::make('user-generator')->with('legislators', $legislators)->with('firstname', $firstname);
});

Route::get('lorem-ipsum', function()
{
  return View::make('lorem-ipsum');
});
Route::get('/welcome', function()
{
	return View::make('welcome');
});

Route::get('/data', function() {


});

