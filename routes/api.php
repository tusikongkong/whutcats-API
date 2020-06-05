<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app(\Dingo\Api\Routing\Router::class);
$api->version('v1', function ($api){
    $api->get('/cats', \App\Http\Controllers\CatController::class.'@index');
    $api->get('/cat/{id}', \App\Http\Controllers\CatController::class.'@show');
    $api->get('/search', \App\Http\Controllers\CatController::class.'@search');
    $api->get('/about',function (){
        return \App\About::all();
    });
    $api->get('/bulletin', function (){
       return \App\Bulletin::all();
    });
    $api->get('/contact', \App\Http\Controllers\ContactController::class.'@index');
    $api->get('/article', function (){
        return \App\Article::all();
    });
});
