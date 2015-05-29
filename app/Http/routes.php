<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('dashboard',['as'=>'article.index','uses'=>'ArticleController@index']);
Route::get('article',['as'=>'article.create','uses'=>'ArticleController@create']);
Route::post('/article',['as'=>'article.store','uses'=>'ArticleController@store']);
Route::get('article/{article}',['as'=>'article.destroy','uses'=>'ArticleController@destroy']);
Route::get('index',['as'=>'article.index','uses'=>'ArticleController@view']);
Route::get('viewarticle/{id}', 'ArticleController@viewArticle');
Route::get('listarticle', 'ArticleController@show');


Route::get('addAsisstant',['as'=>'asisstant.create','uses'=>'AsisstantController@create']);
Route::post('/addAsisstant',['as'=>'asisstant.store','uses'=>'AsisstantController@store']);
Route::get('/listAsisstant',['as'=>'asisstant.index','uses'=>'AsisstantController@index']);
Route::get('listAsisstant/{listAsisstant}',['as'=>'asisstant.destroy','uses'=>'AsisstantController@destroy']);
Route::get('assistant/', 'AsisstantController@view');

Route::get('loan',['as'=>'loan.index','uses'=>'LoanController@index']);
Route::get('formLoan',['as'=>'loan.create','uses'=>'LoanController@create']);
Route::post('/formLoan',['as'=>'loan.store','uses'=>'LoanController@store']);
Route::get('formLoan/{formLoan}/update',['as'=>'loan.update','uses'=>'LoanController@update']);
Route::get('formLoan/{formLoan}',['as'=>'loan.destroy','uses'=>'LoanController@destroy']);

route::get('login','userController@index');
route::post('auth','userController@store');
route::get('logout','userController@logout');



Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
