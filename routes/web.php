<?php

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

Route::get('/', function () {return view('welcome');});

//Route::get('/nivel1', function (){return view('layouts/nivel1');});

/*Route::get('/teste', function () {
    
    $testes = DB::select("select * from valor_nv1 where id_master =?", ['1']);
    
    
    return view('layouts/nivel1',['testes' => $testes]);

});*/


Route::get('/broker1', function () {return view('/layouts/broker1');});

Route::get('/dashboard', function () {
    return view('dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('dashboard1');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
