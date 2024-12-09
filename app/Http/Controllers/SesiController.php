<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    //welcome
    function welcome(){
        return view('welcome');
    }
    // Login
    function index()
    {
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }
            elseif(Auth::user()->role == 'client'){
                return redirect('/client/readproject');
            }
            elseif(Auth::user()->role == 'freelancer'){
                return redirect('/freelancer/projects');
            }
        }
        else{
            return redirect('')->withErrors('Invalid Credencial')->withInput();
        }

    }

    function logout(){
        Auth::logout();
        return redirect('');
    }

    // Register Client
    function register_client(){
        return view('registerclient');
    }

    function add_client(Request $request){
        $request->validate([
            'name' => 'required|string|unique:users,name',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8',
            'repeat-password' => 'required|string|same:password',
            'company' => 'required|string', // Validasi untuk company
            'bio' => 'required|string', // Validasi untuk bio
        ]);
    
        // Buat pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'client';
        $user->save();
    
        // Buat klien baru
        $client = new Client();
        $client->company = $request->company;
        $client->bio = $request->bio;
        $client->user_id = $user->id;
        $client->save(); 
    
        return redirect('/')->with('success', 'Client registered successfully!');
    }

    function register_freelancer(){
        return view('registerfreelancer');
    }

    function add_freelancer(Request $request){

        $request->validate([
            'name' => 'required|string|unique:users,name',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|min:8',
            'repeat-password' => 'required|string|same:password',
            'first_name' => 'required|string', // Validasi untuk company
            'last_name' => 'required|string', // Validasi untuk bio
            'experience' => 'required|string',
            'skills' => 'required|string',
            'bio' => 'required|string',
            'rekening' => 'required|string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'client';
        $user->save();

        $freelancer = new Freelancer();
        $freelancer->first_name = $request->first_name;
        $freelancer->last_name = $request->last_name;
        $freelancer->experience = $request->experience;
        $freelancer->skills = $request->skills;
        $freelancer->bio = $request->bio;
        $freelancer->rekening = $request->rekening;
        $freelancer ->user_id = $user->id;
        $freelancer->save();

        return redirect('/')->with('success', 'Client registered successfully!');
    }
}

