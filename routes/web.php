<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

Route::middleware(['guest'])->group(function(){
    
});
Route::get('/',[SesiController::class,'index'])->name('login');
Route::post('/',[SesiController::class,'login']);
Route::get('/registerclient',[SesiController::class,'register_client'])->name('register_client');
Route::post('/registerclient',[SesiController::class,'add_client']);
Route::get('/registerfreelancer',[SesiController::class,'register_freelancer'])->name('register_freelancer');
Route::post('/registerfreelancer',[SesiController::class,'add_freelancer']);




Route::get('/home',function(){
    return redirect('/' );
});


 
Route::middleware(['Auth'])->group(function(){
    
});

Route::get('/admin',[AdminController::class,'index']);
Route::get('/Freelancer',[FreelancerController::class,'index']);
Route::get('/logout',[SesiController::class,'logout']);
Route::get('/client/addproject',[ClientController::class,'index'])->name('client.addproject');
Route::post('/client/addproject',[ClientController::class,'add_project'])->name('client.addproject.post');



// client

