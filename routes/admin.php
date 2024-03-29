<?php

use GuzzleHttp\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CitaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\DetalleController;
use App\Http\Controllers\Admin\MascotaController;
use App\Http\Controllers\Admin\HistoriaController;
use App\Http\Controllers\Admin\ServicioController;

Route::get('', [HomeController::class, 'index'])->Middleware('can:admin.home')->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');
Route::resource('citas', CitaController::class)->names('admin.citas');
Route::resource('agendas', AgendaController::class)->names('admin.agendas');
Route::resource('clientes', ClienteController::class)->names('admin.clientes');
Route::resource('detalles', DetalleController::class)->names('admin.detalles');
Route::resource('historias', HistoriaController::class)->names('admin.historias');
Route::resource('mascotas', MascotaController::class)->names('admin.mascotas');