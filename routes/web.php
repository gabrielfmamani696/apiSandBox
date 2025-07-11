<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/usuarios/ordenes', [
    'uses'=>'UsuarioController@showAndOrdenes'
]);

$router->get('/usuarios', [
    'uses'=>'UsuarioController@showAll'
]);

// $router->get('/usuarios/{id}', [
//     'uses'=>'UsuarioController@show'
// ]);

// use App\Http\Controllers\UserController;

// Route::get('/user', [UserController::class, 'index']);