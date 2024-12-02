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
    function read_project(){
        return view('Client.readproject');
    }

}