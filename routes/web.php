<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


// Default 
Route::get('/', function () { return view('login');
});

// Login
Route::get('login',[DashboardController::class,'loginpage']);

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

// Porjects
Route::get('/projects',[DashboardController::class,'projectpage']);
Route::post('/add/projectdata',[DashboardController::class,'insertproject']);
Route::post('/edit/projectdata',[DashboardController::class,'updateproject']);

// Project Details (Tasks)
Route::get('/projects/{projectID}',[DashboardController::class,'projectdetails']);
Route::post('/add/projectdetailsdata',[DashboardController::class,'insertprojectdetails']);
Route::post('/edit/projectdetailsdata',[DashboardController::class,'updateprojectdetails']);

// Social Accounts
Route::get('/accounts',[DashboardController::class,'socialaccounts']);
Route::post('/add/accountsdata',[DashboardController::class,'insertaccount']);
Route::post('/edit/accountsdata',[DashboardController::class,'updatesocialaccounts']);





// --------------------------------- Api
// Works
Route::get('/api/getdata/{id_work}',[DashboardController::class,'getworkdata']); 
Route::get('/api/Deletedata/{id_work}',[DashboardController::class,'deleteworkdata']);

//RemainWorks
Route::get('/api/taskgetdata/{id_remain}',[DashboardController::class,'getremainworkdata']);
Route::get('/api/taskDeletedata/{id_remain}',[DashboardController::class,'deleteremainwork']);

// Projects 
Route::get('/api/projectgetdata/{id_proj}',[DashboardController::class,'getprojectdata']);
Route::get('/api/PorjectDeletedata/{id_proj}',[DashboardController::class,'deleteproject']);

// Project Details
Route::get('/api/projectdetailsgetdata/{id_detproj}',[DashboardController::class,'getprojectdetails']);

Route::get('/api/accountgetdata/{id_sac}',[DashboardController::class,'getsocialaccountdata']);