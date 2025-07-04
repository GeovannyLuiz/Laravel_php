<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;

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

Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

Route::get('/', function () {
    return view('welcome');
});
