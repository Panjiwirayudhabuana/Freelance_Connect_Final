<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

Route::middleware(['guest'])->group(function(){
    
    
});

Route::get('/login',[SesiController::class,'index'])->name('login');
Route::post('/login',[SesiController::class,'login']);
Route::get('/registerclient',[SesiController::class,'register_client'])->name('register_client');
Route::post('/registerclient',[SesiController::class,'add_client']);
Route::get('/registerfreelancer',[SesiController::class,'register_freelancer'])->name('register_freelancer');
Route::post('/registerfreelancer',[SesiController::class,'add_freelancer']);



Route::get('/',[SesiController::class,'welcome'])->name('welcome');
Route::get('/home',function(){
    return redirect('/' );
});


 
Route::middleware(['Auth'])->group(function(){
    Route::get('/client/addproject', [ClientController::class, 'index'])->name('client.addproject');
    Route::post('/client/addproject', [ClientController::class, 'add_project'])->name('client.addproject.post');
    Route::get('/client/readproject', [ClientController::class, 'read_project'])->name('client.project'); // Pastikan ini ada
    

});

Route::get('/client/editproject/{id}', [ClientController::class, 'edit_project'])->name('client.editproject');
Route::put('/client/updateproject/{id}', [ClientController::class, 'update_project'])->name('client.updateproject');
Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
Route::post('/client/profile', [ClientController::class, 'updateProfile'])->name('client.profile.update');

Route::get('/admin',[AdminController::class,'index']);
Route::get('/Freelancer',[FreelancerController::class,'index']);
Route::get('/logout',[SesiController::class,'logout'])->name('logout');
Route::get('/client/addproject',[ClientController::class,'index'])->name('client.addproject');
Route::post('/client/addproject',[ClientController::class,'add_project'])->name('client.addproject.post');
Route::get('/client/readproject',[ClientController::class,'read_project'])->name('client.project');



//freelancer
Route::get('/freelancer/projects', [FreelancerController::class, 'read_all_project'])->name('freelancer.show');





