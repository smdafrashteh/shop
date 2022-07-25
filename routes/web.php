<?php

use App\Http\Controllers\Commodity;
use App\Http\Controllers\CreateContent;
use App\Http\Controllers\CssController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::prefix('post')->name('post.')->group(function () {
    Route::get('/fake',[CreateContent::class,'fake'])->name('fake');
    Route::get('/create', [CreateContent::class, 'create'])->name('create');
    Route::post('/create', [CreateContent::class, 'store'])->name('store');
    Route::get('/index', [CreateContent::class, 'index'])->name('index');
    Route::delete('/delete/{post}', [CreateContent::class, 'delete'])->name('delete');
    Route::get('/update/{post}', [CreateContent::class, 'update1'])->name('update1');
    Route::put('/update/{post}', [CreateContent::class, 'update2'])->name('update2');
    Route::delete('/delete/checkbox', [CreateContent::class, 'deletecheckbox'])->name('chechbox');
    Route::post('/search',[CreateContent::class,'search'])->name('search');
    Route::post('/deleteall',[CreateContent::class,'deleteall'])->name('deleteall');

});


Route::get('/csstest',[CssController::class,"css"])->name('css');

Route::view('contacts', 'users.contacts');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::prefix('commodity')->name('commodity.')->group(function()
{
    Route::get('/index',[Commodity::class,'index'])->name('index');
    Route::post("/create",[Commodity::class,'create'])->name('create');
});

require __DIR__.'/auth.php';
