<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::redirect('/', '/login');

Route::get('/', [StudentController::class, 'index'])->middleware('login');
Route::get('/student/{student}', [StudentController::class, 'show'])->middleware('login');
Route::get('/create', [StudentController::class, 'create'])->middleware('login');
Route::post('/', [StudentController::class, 'store'])->middleware('login');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->middleware('login');
Route::patch('/student/{student}', [StudentController::class, 'update'])->middleware('login');
Route::delete('/student/{student}', [StudentController::class, 'destroy'])->middleware('login');