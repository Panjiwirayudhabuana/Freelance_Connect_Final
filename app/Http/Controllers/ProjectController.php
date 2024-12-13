<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Models\Project;

class ProjectController extends Controller
{
    public function downloadSubmission($project)
    {
        $projectData = DB::table('projects')
            ->join('detail_projects', 'projects.id', '=', 'detail_projects.project_id')
            ->where('projects.id', $project)
            ->first();

        if (!$projectData || !$projectData->submission) {
            return back()->with('error', 'File tidak ditemukan');
        }

        $fileName = 'submission_project_' . $project . '.zip';

        return response($projectData->submission)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
    }

    public function index()
    {
        $projects = Project::latest()->paginate(7);
        return view('admin.tableproject', compact('projects'));
    }
} 