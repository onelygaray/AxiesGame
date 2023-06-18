<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemDetailController;
use App\Http\Controllers\ItemDetails;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Implementacion
    Route::resource('/item/create', ItemController::class)->except('show');
    Route::get('/author', [ItemController::class, 'show'])->name('author');
    Route::get('/itemDetail/{id}', [ItemDetailController::class, 'show'])->name('itemDetail.show');
});


Route::post('/items/{itemId}/like', [LikeController::class, 'store'])->name('items.like');
Route::post('collections/{collectionId}/like',[LikeController::class,'likesCollection'])->name('collection.like');
Route::get('collection',[CollectionController::class, 'create']);
Route::post('layouts',[CollectionController::class, 'store'])->name('collection.store');
// Route::get('/collection', function () {
//     return view('layouts.collection');
// });

require __DIR__ . '/auth.php';
