<?php

use App\Http\Controllers\KarakterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [KarakterController::class, 'index']);
Route::get('/add', [KarakterController::class, "create"]);
Route::post('/store', [KarakterController::class, "store"]);
Route::get('/{id}/edit', [KarakterController::class, "edit"]);
Route::put('update/{id}', [KarakterController::class, "update"]);
Route::delete('update/{id}', [KarakterController::class, "destroy"]);