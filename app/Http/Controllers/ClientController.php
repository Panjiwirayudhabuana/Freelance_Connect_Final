<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DetailProject;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    // Menampilkan form untuk menambahkan proyek
    public function index()
    {
        return view('client.addproject');
    }

    // Menambahkan proyek baru
    public function add_project(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:1|max:9223372036854775807',
            'deadline' => 'required|date',
            'detail' => 'required|file|mimes:pdf,zip,rar|max:10240',
            'description' => 'required|string',
        ]);

        $user = Auth::user();
        $client = $user->client;

        if (!$client) {
            return redirect()->route('client.addproject')->with('error', 'Client not found for the logged-in user.');
        }

        $filePath = $request->file('detail')->store('uploads', 'public');

        $project = Project::create([
            'title' => $request->title,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'detail' => $filePath,
            'description' => $request->description,
            'status' => 'open',
            'client_id' => $client->id,
        ]);

        return redirect()->route('client.addproject')->with('success', 'Project added successfully!');
    }

    // Menampilkan daftar proyek
    public function read_project()
    {
        $user = Auth::user();
        $client = $user->client;

        if (!$client) {
            return redirect()->route('client.addproject')->with('error', 'Client not found for the logged-in user.');
        }

        // Ambil proyek dengan pagination
        $projects = Project::with('freelancers')
        ->get()
        ->map(function ($project) {
            return [
                'title' => $project->title,
                'budget' => $project->budget,
                'deadline' => $project->deadline,
                'status' => $project->status,
                'freelancers' => $project->freelancers->pluck('first_name')
            ];
        });


        return view('client.readproject', compact('projects'));
    }


    // Menampilkan form untuk mengedit proyek
    public function edit_project($id)
    {
        $project = Project::findOrFail($id);
        return view('client.editproject', compact('project'));
    }

    // Mengupdate proyek
    public function update_project(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'budget' => 'required|numeric|min:1|max:9223372036854775807',
            'deadline' => 'required|date',
        ]);

        $project = Project::findOrFail($id);
        $project->title = $request->title;
        $project->budget = $request->budget;
        $project->deadline = $request->deadline;
        $project->save();

        return redirect()->route('client.project')->with('success', 'Project updated successfully!');
    }
    public function profile()
    {
        $user = Auth::user();
        $client = $user->client;

        return view('client.profile', compact('user', 'client'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'bio' => 'required|string',
        ]);

        $user = Auth::user();
        $client = $user->client;

        $user->name = $request->name;
        $client->company = $request->company;
        $client->bio = $request->bio;

        $client->save();

        return redirect()->route('client.profile')->with('success', 'Profile updated successfully!');
    }

    
}