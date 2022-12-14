<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuruController,
    KelasController,
    MapelController,
    SiswaController,
    DashboardController,
    AuthController,
};

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
    return view('layout.app');
});

//Rute Login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::group(['middleware'=>['auth', 'checkRole:admin']], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    Route::get('/guru/data', [GuruController::class, 'data'])->name('guru.data');
    Route::resource('/guru', GuruController::class);
    
    Route::get('/kelas/data', [KelasController::class, 'data'])->name('kelas.data');
    Route::resource('/kelas', KelasController::class);
    
    Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
    Route::get('/siswa/profile/{id}', [SiswaController::class, 'profile'])->name('siswa.profile');
    Route::resource('/siswa', SiswaController::class);
    
    Route::get('/mapel/data', [MapelController::class, 'data'])->name('mapel.data');
    Route::resource('/mapel', MapelController::class);

});

Route::group(['middleware'=>['auth', 'checkRole:admin,siswa']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});