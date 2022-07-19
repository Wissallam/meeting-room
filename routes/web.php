<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\SettingController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/feature',[FeatureController::class,'index']);
Route::get('/feature/new',[FeatureController::class,'new']);
Route::post('/feature/save',[FeatureController::class,'save']);
//print using dompdf package
Route::get('/feature/print',[FeatureController::class,'print']);
Route::get('/{id}/feature/edit', [FeatureController::class,'edit']);
Route::post('/feature/update',[FeatureController::class,'update']);
Route::get('/{id}/feature/delete',[FeatureController::class,'delete']);




Route::get('/meeting',[MeetingController::class,'index']);
Route::get('/meeting/new',[MeetingController::class,'new']);
Route::post('/meeting/save',[MeetingController::class,'save']);
//print using dompdf package
Route::get('/meeting/print',[MeetingController::class,'print']);
Route::get('/{id}/meeting/edit', [MeetingController::class,'edit']);
Route::post('/meeting/update',[MeetingController::class,'update']);
Route::get('/{id}/meeting/delete',[MeetingController::class,'delete']);






Route::get('/departement',[DepartementController::class,'index']);
Route::get('/departement/new',[DepartementController::class,'new']);
Route::post('/departement/save',[DepartementController::class,'save']);
//print using dompdf package
Route::get('/departement/print',[DepartementController::class,'print']);
Route::get('/{id}/departement/edit', [DepartementController::class,'edit']);
Route::post('/departement/update',[DepartementController::class,'update']);
Route::get('/{id}/departement/delete',[DepartementController::class,'delete']);





Route::get('/setting',[SettingController::class,'index']);
Route::get('/setting/new',[SettingController::class,'new']);
Route::post('/setting/save',[SettingController::class,'save']);
//print using dompdf package
Route::get('/setting/print',[SettingController::class,'print']);
Route::get('/{id}/setting/edit', [SettingController::class,'edit']);
Route::post('/setting/update',[SettingController::class,'update']);
Route::get('/{id}/setting/delete',[SettingController::class,'delete']);