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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Routing\Router;


Auth::routes(['verify' => true]);
Route::group(['middleware' => ['verified']], function (Router $router) {
    $router->any('/', 'HomeController@index');
    $router->any('/home', function () {
        return redirect('/docs');
    });
});


