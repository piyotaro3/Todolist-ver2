<?php
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, 'index'])->middleware('auth');
Route::post('/todo/create', [TodoController::class, 'create'])->middleware('auth');
Route::post('/todo/update', [TodoController::class, 'update']);
Route::get('/todo/delete', [TodoController::class, 'delete']);
Route::post('/todo/delete', [TodoController::class, 'remove']);
Route::get('/todo/find', [TodoController::class, 'find'])->middleware('auth');
Route::get('/todo/search', [TodoController::class, 'search'])->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
