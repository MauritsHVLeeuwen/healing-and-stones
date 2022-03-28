<?php

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

Route::get('/' , App\Http\Livewire\Home::class)->name('home');
Route::get('/over-ons' , App\Http\Livewire\About::class)->name('about');
Route::get('/behandelingen' , App\Http\Livewire\OverOns::class)->name('treatments');
