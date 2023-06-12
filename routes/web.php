<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
// Route::get('layouts', function () {
//     return view('layouts.author');
// });



Route::resource('/item/create', ItemController::class)->except('show');
// Route::get('/item/create', [ItemController::class, 'create']);
// Route::post('/item', [ItemController::class, 'store']);
// Route::get('/item/{id}/edit', [ItemController::class, 'edit']);
// Route::put('/item/{id}', 'ItemController@update');
// Route::delete('/item/{id}', 'ItemController@destroy');

require __DIR__ . '/auth.php';
