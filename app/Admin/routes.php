<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('cats', CatController::class);
    $router->resource('contacts',ContactController::class);
    $router->resource('abouts',AboutController::class);
    $router->resource('bulletins',BulletinController::class);
    $router->resource('articles', ArticleController::class);
});
