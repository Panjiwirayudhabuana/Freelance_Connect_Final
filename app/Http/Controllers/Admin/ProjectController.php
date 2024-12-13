<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Fungsi untuk membaca (menampilkan) semua proyek
    public function index()
    {
        $projects = Project::all();
        return view('admin.tableproject', compact('projects'));
    }

    // Fungsi untuk menghapus proyek
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('listproject')->with('success', 'Project deleted successfully.');
    }
}