<?php


use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Chanal;
use App\Http\Livewire\Home\Charts;

use App\Http\Livewire\Home\Dashboard;
use App\Http\Livewire\Movie;
use App\Http\Livewire\Page01;
use App\Http\Livewire\Page02;
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





//Route::post('/store', [App\Http\Controllers\TestController::class, 'store']);



Route::get('/movies', Movie::class)->name('movies');
Route::get('/chanals', Chanal::class)->name('chanals');

Route::get('/movie/{movies}', Page01::class);
Route::get('/chanal/{chanals}', Page02::class);

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('home.dashboard');
    Route::get('/charts', Charts::class)->name('home.charts');
});

Route::middleware('guest')->group(function () {
   // Route::redirect('/dashboard', 'login');
    Route::get('/login', Login::class)->name('auth.login');
});
