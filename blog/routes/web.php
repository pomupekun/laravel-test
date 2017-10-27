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

Route::get('/', 'WelcomeController@index');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

// argicles
Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::patch('articles/{id}', 'ArticlesController@update');
Route::delete('articles/{id}', 'ArticlesController@destroy');

//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');
//Route::patch('articles/{id}', 'ArticlesController@update');
//Route::delete('articles/{id}', 'ArticlesController@destroy');


Route::get(
	'articles',
	array(
		'as' => 'articles.index',
		'uses' => 'ArticlesController@index'
	)
);
Route::get(
	'articles/create',
	array(
		'as' => 'articles.create',
		'uses' => 'ArticlesController@create'
	)
);
Route::get(
	'articles/{id}',
	array(
		'as' => 'articles.show',
		'uses' => 'ArticlesController@show'
	)
);
Route::post(
	'articles',
	array(
		'as' => 'articles.store',
		'uses' => 'ArticlesController@store'
	)
);
Route::get(
	'articles.{id}/edit',
	array(
		'as' => 'articles.edit',
		'uses' => 'ArticlesController@edit'
	)
);
Route::patch(
	'articles/{id}',
	array(
		'as' => 'articles.update',
		'uses' => 'ArticlesController@update'
	)
);
Route::delete(
	'articles/{id}',
	array(
		'as' => 'articles.destroy',
		'uses' => 'ArticlesController@destroy'
	)
);

