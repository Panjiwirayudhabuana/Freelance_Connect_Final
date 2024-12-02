<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    function index(){
        return view('client.addproject');
    }

    public function add_project(Request $request) {
        // Validasi data yang diterima
        $request->validate([
            'title' => 'required|string',
            'budget' => 'required',
            'deadline' => 'required',
            'detail' => 'required|file|mimes:pdf,zip,rar',
            'description' => 'required'
        ]);
        
        // Ambil pengguna yang sedang login
        $user = Auth::user();
    
        // Pastikan pengguna sudah login
        if (!$user) {
            return redirect()->route('client.addproject')->with('error', 'You must be logged in to add a project.');
        }
    
        // Ambil client yang terkait dengan pengguna
        $client = $user->client;
    
        // Pastikan client ada
        if (!$client) {
            return redirect()->route('client.addproject')->with('error', 'Client not found for the logged-in user.');
        }
    
        // Simpan file yang diupload
        $filePath = $request->file('detail')->store('uploads', 'public');
    
        // Buat proyek baru
        $project = new Project();
        $project->title = $request->title;
        $project->budget = $request->budget;
        $project->deadline = $request->deadline;
        $project->detail = $filePath;
        $project->description = $request->description;
        $project->status = 'open';
        $project->client_id = $client->id; // Gunakan client_id dari relasi
    
        // Simpan proyek
        try {
            $project->save();
            return redirect()->route('client.addproject')->with('success', 'Project added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('client.addproject')->with('error', 'Failed to add project: ' . $e->getMessage());
        }
    }
}