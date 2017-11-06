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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::auth();

Route::group(['middleware'=>'isAdmin'], function() {
    Route::resource('admin/users', 'AdminUsersController');
});

Route::get('/admin', function () {
    return view('admin.index');
});

/*

Route::get('/isAuthentacated', function () {
    if(Auth::check()) {
        return "The user is logged in.";
    }
});


Route::get('/authenticateThUserFromForm',function (){
    $username = "a@a.a";
    $password = "123456";
    if(Auth::attempt(['email'=> $username, 'password'=> $password])) {
        return "That user is exist";
//        return redirect()->intended();
    }
    return "That user is NOT exist";

});


Route::get('/adminOld/user/roles',['middleware'=>['role', 'auth'], function(){
    return "Middlware Role";
}]);

Route::get('/adminOld', 'AdminController@index');*/



