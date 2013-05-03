<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

//rg commented out
//a static page:
/*
Route::get('/', function()
{
	return View::make('home.index');
});
*/

//routes for controllers:

Route::controller('account');
Route::controller('demo');
Route::controller('calc');

Route::get('surl', function()
	{
		return View::make('surl.index');
	});


Route::post('surl', function()
{
	$url = Input::get('url');
	// $longurl = Input::get('url');
	// $url = preg_replace('#^https?://#', '', $longurl);
	
	// validate url
	$v = Url::validate(array('url' => $url));


	if($v !== true ) {
		return Redirect::to('/surl/')->with_errors($v->errors);
	}
		
	// if url already in table, return it
	$record = Url::where_url($url)->first();

	if ( $record ){
		//then return it
		return View::make('surl.result')
		->with(array(
			'surl' => $record->surl,
			'url' => $record->url
			));
	}
		
	$surl = URL::get_unique_short_url();
		
	// else, add new row & return shortened url
	$row = URL::create(array(
		'url' 	=> $url,
		'surl' 	=> $surl
	));
//dd($row);
	if( $row ){


		return View::make('surl.result')->with(array('surl' => $row->surl, 'url' => $row->url));
		//return "Found!";
	}
	return "Something went horribly wrong!";
});

Route::get('surl/(:any)', function($surl)
{
	//query for the row with the short url
	$row = Url::where_surl($surl)->first();

	//if not found, redirect home
	if( is_null($row) ) return Redirect::to($surl);
	//if it is found, redirect to that url
	else return Redirect::to($row->url);
	//else return Redirect::to("http://".$row->url);
	// else return "I found it: ".$row->url;
	 // dd($surl);
		
		//otherwise, fetch the url in the same row 
		
	
});
// Route::any('calc','calc@index');

// An important thing to note here is that by default, Laravel does NOT route 
// to the controllers like other PHP-frameworks do. This is by design.
//  By doing so, we can actually create simple pages without the need to create 
//  a controller for it. For example, if we wanted to create a static 
//  Contact Us page that just lists down contact information, 
//  we can simply do something like this:
	
 // Route::any('contact-us', function()
 // {
 //     return View::make('home.contact-us');
 // })



// Route::controller('home');

// Route::get('about', function()
// 	{
// 		return View::make('home.about', array(

// 			'data' => array('foo', 'bar', 'baz'),
// 			'empty' => array()

// 			));
// 	});

Route::get('posts', function()
{
	$users = User::all();
	return View::make('home.posts')->with('users', $users);

});
// http://codehappy.daylerees.com/using-controllers
//Here we are saying, let's send all web requests with the GET HTTP verb,
// and the address /superwelcome/(:any)/(:any) to the welcome action
//  of the account controller. 
//  
//  The (:any) segments are place-holders for our parameters,
//  and will be passed in the order that they are provided. 
//   
//  Using (:num) will match only numbers, and 
//  using (:any?) will create an optional segment.
// Route::get('superwelcome/(:any)/(:any)', 'account@welcome');

// http://codehappy.daylerees.com/routes-with-closures
// Routes are RESTful by nature, but you can use Route::any() to respond to any HTTP verb. Here are your options:

//     <?php
//     // application/routes.php
//     Route::get();
//     Route::post();
//     Route::put();
//     Route::delete();
//     Route::any();
//     
// Route::get('user/(:any)/task/(:num)', function($username, $task_number)
// {
// // $username will be replaced by the value of (:any)
// // $task_number will be replaced by the integer in place of (:num)
// 	$data = array(
// 	'username' => $username,
// 	'task' => $task_number
// 	);
// 	return View::make('tasks.for_user', $data);

// 	// Available placeholders are:
// 	// Placeholder 	Explanation
// 	// (:any) 	Match any alpha-numeric string
// 	// (:num) 	Match any whole number.
// 	// (:any?) 	Optional parameter.

// });

///////////////////////////////////////////////
//Redirects and Named Routes
//
//
//
// Route::get('/', function()
// 	{
// 	return Redirect::to('account/profile');
// 	});

// Route::get('account/profile', array('as' => 'profile', 'do' => function()
// 	{
// 	return View::make('account/profile');
// 	}));

// Route::get('/', function()
// 	{
// 	return Redirect::to_route('profile');
// 	});


//interestingly, this was recommended by the the manual, 
//but I have read elsewhere that it's bad practice. It's better
//to explicitly define each controller.
//
//The following line opens all controllers.
//Route::controller(Controller::detect());

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});



//my code below
//rg
//
// Route::get('/', array('as' => 'profile', 'before' => 'auth', 'do' => function()
// {
// return View::make('account/profile');
// }));

//As of Laravel 3.1, if you would like to add a filter 
//to a number of requests whose URI's match a specific pattern, 
//use the following line :
// Route::filter('pattern: admin/*', 'auth');

// //grouped routes:
// Route::group(array('before' => 'auth'), function()
// {
// 	Route::get('panel', function()
// 		{
// 		// do stuff
// 		});
// 	Route::get('dashboard', function()
// 		{
// 		// do stuff
// 		});
// });
