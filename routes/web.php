<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CalendarController;







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



/*
|--------------------------------------------------------------------------
|                             Home page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


//test form calendar

//Route::resource('/events',[EventController::class,'store']);
Route::get('/testform', function () {
    return view('testform');
});
Route::get('/testcal', function () {
    return view('testcal');
});

//test list of meetings for a user

Route::get('/test',[MeetingController::class,'index']);
//testphotodeprofil


Route::get('/profil',[MeetingController::class,'profile']);





Route::get('/listroom',[TestController::class,'index']);

// -----------------TEST-------------------




Route::get('/dashboard', function () {
    return view('calender');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';








Route::get('/meeting',[MeetingController::class,'index']);
Route::get('/meeting/new',[MeetingController::class,'new']);
Route::post('/meeting/save',[MeetingController::class,'save']);
//print using dompdf package
Route::get('/meeting/print',[MeetingController::class,'print']);
Route::get('/{id}/meeting/edit', [MeetingController::class,'edit']);
Route::post('/meeting/update',[MeetingController::class,'update']);
Route::get('/{id}/meeting/delete',[MeetingController::class,'delete']);











// ------------------------------------------------------------------------------
// -------------------- admin -------------- admin--------------- admin-----------------------------
// ---------------------------------------------------------------------------------


Route::middleware(['auth', 'is_admin'])->group(function () {

    //admin.dash
    Route::get('admin/dash', [DashController::class, 'admindash'])->name('admin.dash');

    //departement
    Route::get('/departement',[DepartementController::class,'index']);
Route::get('/departement/new',[DepartementController::class,'new']);
Route::post('/departement/save',[DepartementController::class,'save']);
Route::get('/departement/print',[DepartementController::class,'print']);
Route::get('/{id}/departement/edit', [DepartementController::class,'edit']);
Route::post('/departement/update',[DepartementController::class,'update']);
Route::get('/{id}/departement/delete',[DepartementController::class,'delete']);

   // admin.user
    Route::get('/user',[UserController::class,'index']);
Route::get('/user/new',[UserController::class,'new']);
Route::post('/user/save',[UserController::class,'save']);
Route::get('/{id}/user/edit', [UserController::class,'edit']);
Route::post('/user/update',[UserController::class,'update']);
Route::get('/{id}/user/delete',[UserController::class,'delete']);

   // role
    Route::get('/role',[RoleController::class,'index']);
Route::get('/role/new',[RoleController::class,'new']);
Route::post('/role/save',[RoleController::class,'save']);
Route::get('/{id}/role/edit', [RoleController::class,'edit']);
Route::post('/role/update',[RoleController::class,'update']);
Route::get('/{id}/role/delete',[RoleController::class,'delete']);

   // admin.room
    Route::get('/room',[RoomController::class,'index']);
Route::get('/room/new',[RoomController::class,'new']);
Route::post('/room/save',[RoomController::class,'save']);
Route::get('/{id}/room/edit', [RoomController::class,'edit']);
Route::post('/room/update',[RoomController::class,'update']);
Route::get('/{id}/room/delete',[RoomController::class,'delete']);

  //  admin.photo
Route::get('/photo/new',[PhotoController::class,'new']);
Route::post('/photo/save',[PhotoController::class,'save']);
Route::get('/{id}/photo/edit', [PhotoController::class,'edit']);
Route::post('/photo/update',[PhotoController::class,'update']);
Route::get('/{id}/photo/delete',[PhotoController::class,'delete']);
Route::get('/calendar', [CalendarController::class,'showcalendar']);
Route::get('/calendar/new', [CalendarController::class,'newmeet']);

  //feature
   Route::get('/feature',[FeatureController::class,'index']);
Route::get('/feature/new',[FeatureController::class,'new']);
Route::post('/feature/save',[FeatureController::class,'save']);
Route::get('/feature/print',[FeatureController::class,'print']);
Route::get('/{id}/feature/edit', [FeatureController::class,'edit']);
Route::post('/feature/update',[FeatureController::class,'update']);
Route::get('/{id}/feature/delete',[FeatureController::class,'delete']);

  //setting
   Route::get('/setting',[SettingController::class,'index']);
Route::get('/setting/new',[SettingController::class,'new']);
Route::post('/setting/save',[SettingController::class,'save']);
Route::get('/{id}/setting/edit', [SettingController::class,'edit']);
Route::post('/setting/update',[SettingController::class,'update']);
Route::get('/{id}/setting/delete',[SettingController::class,'delete']);


});
// ------------------------------------------------------------------------------
