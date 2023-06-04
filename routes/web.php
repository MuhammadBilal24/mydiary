<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
// Login
Route::get('login',[DashboardController::class,'loginpage']);

// Default 
Route::get('/', function () { return view('login');
});

// Dashboard
Route::get('dashboard',[DashboardController::class,'index']);

// Works
Route::get('works',[DashboardController::class,'getworks' ]);
Route::post('/add/data',[DashboardController::class,'insertwork']);
Route::post('/edit/data',[DashboardController::class,'updatework']);

// Remain Works (Tasks)
Route::get('/works/{workID}',[DashboardController::class,'remainworks']);
Route::post('/addtask/data',[DashboardController::class,'insertremainworks']);
Route::post('/edittask/data',[DashboardController::class,'updateremainworks']);



// --------------------------------- Api
// Works
Route::get('/api/getdata/{id_work}',[DashboardController::class,'getworkdata']); 
Route::get('/api/Deletedata/{id_work}',[DashboardController::class,'deleteworkdata']);

//RemainWorks
Route::get('/api/taskgetdata/{id_remain}',[DashboardController::class,'getremainworkdata']);
Route::get('/api/taskDeletedata/{id_remain}',[DashboardController::class,'deleteremainwork']);
