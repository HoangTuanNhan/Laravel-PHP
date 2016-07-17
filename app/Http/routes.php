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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
   return view('admin.master'); 
});
/*Admin*/
    Route::get('home', ['as' => 'adminAd', 'uses' => 'ControllerHome@getAdmin']);
/*End*/
/*Login*/

    
//Route::controllers([
//   'auth'=>'Auth\AuthController' ,
//    'password'=>'Auth\PasswordController'
//]);
 Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
   

// Registration routes…
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
/**/
Route::get('logout', ['as' => 'logoutad', 'uses' => 'LogoutController@logoutAd']);
/*End Login*/

/*User*/
Route::get('list-user', ['as' => 'list', 'uses' => 'AdminListUsers@getList']);
Route::get('add-user', ['as' => 'addUser', 'uses' => 'AdminListUsers@getAdd']);
Route::post('add-user', ['as' => 'postUser', 'uses' => 'AdminListUsers@postAdd']);
Route::get('edit-user/{id}', ['as' => 'getUser', 'uses' => 'AdminListUsers@getEdit']);
Route::post('edit-user/{id}', ['as' => 'postGet', 'uses' => 'AdminListUsers@postEdit']);
/*End User*/

/*Delete User*/
Route::get('del-user/{id}', ['as' => 'delUser', 'uses' => 'AdminListUsers@deleteUser']);

/* Pages*/
Route::get('list-pages', ['as' => 'listpage', 'uses' => 'AdminListPages@getListPage']);
Route::get('delete-pages/{id}', ['as' => 'deletepage', 'uses' => 'AdminListPages@deletePage']);
Route::get('edit-pages/{id}', ['as' => 'editpage', 'uses' => 'AdminListPages@editPage']);
//Route::post('edit-pages/{id}', ['as' => 'editPost', 'uses' => 'AdminListPages@editPost']);
Route::post('edit/{id}',['as' => 'edit', 'uses' => 'AdminListPages@edit']);
Route::get('add-pages', ['as' => 'addpage', 'uses' => 'AdminListPages@getAdd']);
Route::post('add-pages', ['as' => 'postpage', 'uses' => 'AdminListPages@getpostAdd']);
/*End pages*/

/*Category*/
Route::get('list-cat', ['as' => 'listCat', 'uses' => 'ControllerCat@getCat']);
Route::get('add-cat', ['as' => 'addcat', 'uses' => 'ControllerCat@getAdd']);
Route::post('add-cat', ['as' => 'postcat', 'uses' => 'ControllerCat@getpostAdd']);
Route::get('edit-cat/{id}', ['as' => 'editCat', 'uses' => 'ControllerCat@editCat']);
Route::post('edit/{id}',['as' => 'editPost', 'uses' => 'ControllerCat@editPostCat']);
Route::get('delete-cat/{id}', ['as' => 'deleteCat', 'uses' => 'ControllerCat@deletePage']);
/*Foody*/
Route::get('list-foody', ['as' => 'listFoody', 'uses' => 'COntrollerFoody@getFoody']);