<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
   
    public function read_all_project()
    {
        // Ambil proyek dengan pagination
        $projects = Project::all();

        return view('freelancer.project', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::with('client')->findOrFail($id); // Mengambil proyek berdasarkan ID
        return view('freelancer.show', compact('project'));
    }

}