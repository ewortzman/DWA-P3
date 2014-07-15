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
	$data = Input::all();
	$options = array_key_exists('options', $data) ?$data['options'] : array();
	$gender = $data['gender'];
	$faker = Faker::create();
	$numUsers = $data['num'];

	for ($i=0;$i<$numUsers;$i++){
		$user = array();
		//Username
		$user['uname'] = $faker->userName;
		
		//Name
		if (in_array('title', $options)) {
			if(!array_key_exists('name', $user)){
				$user['name'] = "";
			}
			$user['name'] .= $faker->title($gender)." ";
		}
		if (in_array('first', $options)) {
			if(!array_key_exists('name', $user)){
				$user['name'] = "";
			}
			$user['name'] .= $faker->firstName($gender)." ";
		}
		if (in_array('last', $options)){
			if(!array_key_exists('name', $user)){
				$user['name'] = "";
			}
			$user['name'] .= $faker->lastName;
		}

		//Address
		if (in_array('address', $options)){
			if(!array_key_exists('address', $user)){
				$user['address'] = "";
			}
			$user['address'] .= $faker->streetAddress;
		}
		if (in_array('city', $options)){
			if(!array_key_exists('location', $user)){
				$user['location'] = "";
			}
			$user['location'] .= $faker->city.", ";
		}
		if (in_array('state', $options)){
			if(!array_key_exists('location', $user)){
				$user['location'] = "";
			}
			$user['location'] .= $faker->stateAbbr.=" ";
		}
		if (in_array('zip', $options)){
			if(!array_key_exists('location', $user)){
				$user['location'] = "";
			}
			$user['location'] .= $faker->postcode;
		}

		//Contact
		if (in_array('email', $options)){
			if(!array_key_exists('email', $user)){
				$user['email'] = "";
			}
			$user['email'] .= $faker->email;
		}
		if (in_array('phone', $options)){
			if(!array_key_exists('phone', $user)){
				$user['phone'] = "";
			}
			$user['phone'] .= $faker->phoneNumber;
		}

		$users[] = $user;
	}

	return View::make('user-generator')
				->with('data', $data)
				->with('options', $options)
				->with('users', $users);
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
				->with('data', $data)
				->with('paragraphs', $pars);
});

Route::get('/about', function(){
	return View::make('about');
});
