<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

//login
Route::get('/admin',[AdminController::class,'index']);
Route::get('/logout',[SesiController::class,'logout'])->name('logout');
Route::get('/login',[SesiController::class,'index'])->name('login');
Route::post('/login',[SesiController::class,'login']);
Route::get('/registerclient',[SesiController::class,'register_client'])->name('register_client');
Route::post('/registerclient',[SesiController::class,'add_client']);
Route::get('/registerfreelancer',[SesiController::class,'register_freelancer'])->name('register_freelancer');
Route::post('/registerfreelancer',[SesiController::class,'add_freelancer']);

//guest
Route::get('/',[SesiController::class,'welcome'])->name('welcome');
Route::get('/home',function(){
    return redirect('/' );
});


//client
Route::get('/client/addproject', [ClientController::class, 'index'])->name('client.addproject');
Route::post('/client/addproject', [ClientController::class, 'add_project'])->name('client.addproject.post');
Route::get('/client/readproject', [ClientController::class, 'read_project'])->name('client.project');
Route::get('/client/editproject/{id}', [ClientController::class, 'edit_project'])->name('client.editproject');
Route::put('/client/updateproject/{id}', [ClientController::class, 'update_project'])->name('client.updateproject');
Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
Route::post('/client/profile', [ClientController::class, 'updateProfile'])->name('client.profile.update');




//freelancer
Route::get('/Freelancer',[FreelancerController::class,'index']);
Route::get('/freelancer/projects/{id}', [FreelancerController::class, 'show'])->name('freelancer.project');
Route::get('/freelancer/projects', [FreelancerController::class, 'read_all_project'])->name('freelancer.showproject');
Route::get('/freelancer/profile', [FreelancerController::class, 'showProfile'])->name('user.profile');
Route::get('/profile/edit/{id}', [FreelancerController::class, 'edit'])->name('user.edit');
Route::put('/profile/update/{id}', [FreelancerController::class, 'update'])->name('user.update');
Route::post('/freelancer/project/{id}/accept', [FreelancerController::class, 'acceptProject'])->name('freelancer.accept_project');
Route::get('/freelancer/ongoing-projects', [FreelancerController::class, 'showOngoingProjects'])->name('freelancer.ongoing_projects');
Route::get('/freelancer/ongoing/{id}', [FreelancerController::class, 'detailOngoing'])->name('freelancer.detail_ongoing');
Route::post('/freelancer/submit-project/{id}', [FreelancerController::class, 'submitProject'])->name('freelancer.submit_project');
Route::post('/freelancer/update-status/{id}', [FreelancerController::class, 'updateStatus'])->name('freelancer.update_status');
Route::get('/freelancer/submission/{id}/download', [FreelancerController::class, 'downloadSubmission'])
    ->name('freelancer.download_submission');


//Admin
Route::get('/listprojects', [ProjectController::class, 'index'])->name('listproject');
Route::get('/listfreelancers', [FreelancerController::class, 'index'])->name('listfreelancer');
Route::get('/listclients', [ListClientController::class, 'index'])->name('listclient');
Route::delete('destroyproject{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::delete('destroyclient{id}', [ListClientController::class, 'destroy'])->name('clients.destroy');
Route::delete('destroyfrelancer{id}', [FreelancerController::class, 'destroy'])->name('freelancers.destroy');
// Route::get('/', [AdminController::class, 'index'])->name('admin.index');





