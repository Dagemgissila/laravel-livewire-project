<?php

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

Route::get('/counter', function () {
    return view('welcome');
});

Route::get("/calculator",\App\Livewire\Calculator::class);
Route::get("/todo-list",\App\Livewire\TodoList::class);
Route::get("/cascading-dropdown",\App\Livewire\CascadingDropdown::class);
Route::get("/products",\App\Livewire\ProductSearch::class);
Route::get("/image-upload",\App\Livewire\ImageUpload::class);
Route::get("/register",\App\Livewire\RegisterForm::class);
