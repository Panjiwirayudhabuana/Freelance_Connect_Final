<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DetailProject;
use App\Models\Payment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        // Validasi minimal 3 hari dari sekarang
        $minDeadline = date('Y-m-d', strtotime('+3 days'));
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|numeric|min:1',
            'deadline' => 'required|date|after_or_equal:' . $minDeadline,
            'detail' => 'required|mimes:pdf|max:5120', // Maksimal 5MB, hanya PDF
        ], [
            'deadline.after_or_equal' => 'Deadline minimal 3 hari dari sekarang.',
            'detail.required' => 'File detail project wajib diupload.',
            'detail.mimes' => 'File detail harus berformat PDF.',
            'detail.max' => 'Ukuran file detail maksimal 5MB.',
        ]);

        try {
            $user = Auth::user();
            $client = $user->client;

            if (!$client) {
                return redirect()->route('client.addproject')
                    ->with('error', 'Client not found.');
            }

            // Upload dan simpan file detail
            if ($request->hasFile('detail')) {
                $file = $request->file('detail');
                $fileName = time() . '_' . $file->getClientOriginalName();
                // Simpan file ke storage/app/public/detail
                $filePath = $file->storeAs('detail', $fileName, 'public');
            }

            $project = Project::create([
                'title' => $request->title,
                'budget' => $request->budget,
                'deadline' => $request->deadline,
                'detail' => $filePath ?? null,
                'description' => $request->description,
                'status' => 'open',
                'client_id' => $client->id,
            ]);

            return redirect()->route('client.addproject')
                ->with('success', 'Project berhasil ditambahkan!');

        } catch (\Exception $e) {
            return redirect()->route('client.addproject')
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
    }

    // Menampilkan daftar proyek
    public function read_project()
    {
        $user = Auth::user();
        
        if (!$user || !$user->client) {
            return redirect()->route('client.addproject')
                ->with('error', 'Silakan lengkapi profil client Anda terlebih dahulu.');
        }

        $projects = Project::select(
            'projects.id', 
            'projects.title', 
            'projects.budget', 
            'projects.deadline', 
            'projects.status', 
            'freelancers.first_name',
            'detail_projects.submission'
        )
            ->leftJoin('detail_projects', 'projects.id', '=', 'detail_projects.project_id')
            ->leftJoin('freelancers', 'freelancers.id', '=', 'detail_projects.freelancer_id')
            ->where('projects.client_id', $user->client->id)
            ->get();

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
        // Validasi minimal 3 hari dari sekarang
        $minDeadline = date('Y-m-d H:i:s', strtotime('+3 days'));
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|numeric|min:1',
            'deadline' => 'required|date|after_or_equal:' . $minDeadline,
            'role' => 'required|in:open,in progress,done,cancelled'
        ], [
            'deadline.after_or_equal' => 'Deadline minimal 3 hari dari sekarang.',
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

    public function detail_project($id)
    {
        $project = DB::table('projects')
            ->leftJoin('detail_projects', 'projects.id', '=', 'detail_projects.project_id')
            ->leftJoin('freelancers', 'detail_projects.freelancer_id', '=', 'freelancers.id')
            ->select(
                'projects.*',
                'detail_projects.id as detail_id',
                'detail_projects.submission',
                'detail_projects.status',
                'freelancers.first_name',
                'freelancers.last_name'
            )
            ->where('projects.id', $id)
            ->first();

        return view('client.detailproject', compact('project'));
    }

    public function payment()
    {
        $user = Auth::user();
        Log::info('User authenticated:', ['user_id' => $user ? $user->id : 'null']);

        if (!$user) {
            return redirect()->route('login')
                ->with('error', 'Silakan login terlebih dahulu.');
        }

        $client = $user->client;
        Log::info('Client data:', ['client_id' => $client ? $client->id : 'null']);

        if (!$client) {
            return redirect()->route('client.profile')
                ->with('error', 'Silakan lengkapi profil client Anda terlebih dahulu.');
        }

        // Inisialisasi $payments sebagai collection kosong
        $payments = collect();

        $payments = DB::table('payments')
                ->join('detail_projects', 'payments.detail_project_id', '=', 'detail_projects.id')
                ->join('projects', 'detail_projects.project_id', '=', 'projects.id')
                ->leftJoin('freelancers', 'detail_projects.freelancer_id', '=', 'freelancers.id')
                ->where('projects.client_id', $client->id)
                ->select(
                    'payments.status as payment_status',
                    'projects.title as project_title',
                    'projects.budget as project_budget',
                    DB::raw('COALESCE(freelancers.first_name, "Not Assigned") as freelancer_name')
                )
                ->get();

        return view('client.payment', compact('payments'));
    
    }

    public function detail_payment($id)
    {
        $payment = Payment::findOrFail($id);
        return view('client.detailpayment', compact('payment'));
    }
}
