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
	return View::make('index');
});

Route::get('/user', function(){
	return View::make('user-generator');
});

Route::post('/user', function(){
	return View::make('user-generator')
				->with('data', Input::all())
				->with('faker', Faker::create());
});

Route::get('/lorem', function(){
	return View::make('lorem-ipsum');
});

Route::post('/lorem', function(){
	$data = Input::all();
	$faker = Faker::create();
	$numPars = rand($data['p_min'], $data['p_max']);
	for ($i = 0; $i<$numPars;$i++){
		$pars[] = $faker->paragraph(rand($data['s_min'], $data['s_max']));
	}

	return View::make('lorem-ipsum')
				->with('paragraphs', $pars);
});

Route::get('/about', function(){
	return View::make('about');
});
