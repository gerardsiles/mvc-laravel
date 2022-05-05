<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui se generan las rutas de la aplicacion.
| Las rutas llaman al controlador, que cargan la vista con la funcion.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Rutas de estudiantes */
route::get('/users', [UsersController::class, 'renderIndex']);
route::get('/users/login', [UsersController::class, 'renderLogin']);
route::post('/users/login', [UsersController::class, 'login']);
route::get('/users/email', [UsersController::class, 'renderEmail']);
route::patch('/users/email', [UsersController::class, 'editEmail']);
route::get('/users/password', [UsersController::class, 'renderPassword']);
route::patch('/users/password', [UsersController::class, 'editPassword']);
route::get('/users/register', [UsersController::class, 'renderRegister']);
route::post('/users/register', [UsersController::class, 'register']);
route::get('/users/schedule', [UsersController::class, 'renderSchedule']);
route::get('/users/username', [UsersController::class, 'renderUsername']);
route::patch('/users/username', [UsersController::class, 'editUsername']);

/* rutas de admin */


