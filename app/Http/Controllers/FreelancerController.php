<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
   
    public function read_all_project()
    {
        // Ambil proyek dengan pagination
        $projects = Project::where('status', 'open')->get();

        return view('freelancer.project', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id); // Ambil proyek berdasarkan ID
        return view('freelancer.detail', compact('project'));
    }

    public function showProfile()
    {
        $user= Auth::user(); // Mengambil data user yang login
        return view('freelancer.profile', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id); // Mengambil user berdasarkan ID
        return view('freelancer.editprofile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:8|confirmed', // Validasi password (nullable jika tidak ingin mengganti)
    ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Hash password baru
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profile updated successfully.');
    }


}