<?php

use App\Http\Controllers\BaggaseController;
use App\Http\Controllers\BoilerController;
use App\Http\Controllers\CalciumController;
use App\Http\Controllers\ColoromatController;
use App\Http\Controllers\DiameterController;
use App\Http\Controllers\FiberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HplcController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\MoistureController;
use App\Http\Controllers\NppController;
use App\Http\Controllers\PreparationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SaccharomatController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SamplingController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\SulphurController;
use App\Http\Controllers\TsaiController;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');
Route::get('logout', [ LoginController::class, 'logout' ])->name('logout');
Route::post('login-process', [ LoginController::class, 'login' ])->name('login-process');
Route::post('register-process', [ LoginController::class, 'register' ])->name('register-process');

Route::get('/', [ HomeController::class, 'index' ])->middleware('user_is_login')->name('home');

Route::resource('users', UserController::class)->middleware(['user_is_login', 'only_admin']);
Route::resource('roles', RoleController::class)->middleware(['user_is_login', 'only_admin']);
Route::resource('stations', StationController::class)->middleware(['user_is_login', 'only_admin']);
Route::resource('methods', MethodController::class)->middleware(['user_is_login', 'only_admin']);

Route::resource('samples', SampleController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('samplings', SamplingController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('saccharomats', SaccharomatController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('coloromats', ColoromatController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('moistures', MoistureController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('npps', NppController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('baggases', BaggaseController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('umums', UmumController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('boilers', BoilerController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('sulphurs', SulphurController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('diameters', DiameterController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('tsais', TsaiController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('hplcs', HplcController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('calciums', CalciumController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('fibers', FiberController::class)->middleware(['user_is_login', 'only_admin_qc']);
Route::resource('preparations', PreparationController::class)->middleware(['user_is_login', 'only_admin_qc']);

Route::get('stations-result/{title}/{id}', [ HomeController::class, 'showStation' ])->middleware('user_is_login')->name('stations-result');
Route::get('methods-result/{id}/{method_id}/{sample_name}', [ HomeController::class, 'showMethod' ])->middleware('user_is_login')->name('methods-result');
