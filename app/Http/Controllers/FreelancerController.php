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
<<<<<<< Updated upstream


=======
    public function acceptProject($id)
    {
        // Mendapatkan proyek berdasarkan ID
        $project = Project::findOrFail($id);
    
        // Cek apakah proyek masih tersedia (berstatus 'open')
        if ($project->status !== 'open') {
            return redirect()->back()->with('error', 'Proyek ini sudah tidak tersedia.');
        }
    
        // Mendapatkan user_id dari sesi login
        $userId = Auth::id();
    
        // Menemukan freelancer berdasarkan user_id
        $freelancer = Freelancer::where('user_id', $userId)->first();
    
        // Pastikan freelancer ditemukan
        if (!$freelancer) {
            return redirect()->back()->withErrors('Freelancer tidak ditemukan.');
        }
    
        // Mendapatkan freelancer_id
        $freelancerId = $freelancer->id;
    
        // Memasukkan data ke dalam detail_projects
        DetailProject::create([
            'project_id' => $project->id,         // Pastikan project_id diisi dengan benar
            'freelancer_id' => $freelancerId,      // Menyimpan freelancer_id yang sesuai
            'status' => 'in progress',                // Status proyek menjadi diterima
        ]);
    
        // Update status proyek menjadi 'close'
        $project->update(['status' => 'close']);
    
        // Redirect ke halaman proyek freelancer dengan pesan sukses
        return redirect()->route('freelancer.showproject')->with('success', 'Proyek berhasil diterima!');
    }
    
    public function showOngoingProjects()
    {

        // Mendapatkan user_id dari sesi login
        $userId = Auth::id();
    
        // Menemukan freelancer berdasarkan user_id
        $freelancer = Freelancer::where('user_id', $userId)->first();
    
        // Pastikan freelancer ditemukan
        if (!$freelancer) {
            return redirect()->back()->withErrors('Freelancer tidak ditemukan.');
        }
    
        $freelancerId = $freelancer->id;
        
        // Mengambil proyek yang sedang berlangsung
        $ongoingProjects = DetailProject::where('freelancer_id', $freelancerId)
                                        ->whereHas('project', function($query) {
                                            $query->where('status', 'close');
                                        })
                                        ->get();

        return view('freelancer.ongoing_projects', compact('ongoingProjects'));


    }

    // Fungsi untuk memperbarui status proyek
    public function submitAndDone(Request $request, $projectId)
    {
        $request->validate([
            'submission' => 'required|file|mimes:zip,rar,7z,pdf,doc,docx|max:10240' // max 10MB
        ]);

        // Cari freelancer berdasarkan user yang login
        $userId = Auth::id();
        $freelancer = Freelancer::where('user_id', $userId)->firstOrFail();

        $detailProject = DetailProject::where('project_id', $projectId)
            ->where('freelancer_id', $freelancer->id)
            ->firstOrFail();

        if ($request->hasFile('submission')) {
            // Hapus file lama jika ada
            if ($detailProject->submission) {
                Storage::delete('public/submissions/' . $detailProject->submission);
            }

            // Simpan file baru
            $fileName = time() . '_' . $request->file('submission')->getClientOriginalName();
            $request->file('submission')->storeAs('public/submissions', $fileName);

            $detailProject->submission = $fileName;
        }

        $detailProject->status = 'done';
        $detailProject->save();

        return redirect()->route('freelancer.ongoing_projects')
            ->with('success', 'File berhasil diupload dan status proyek ditandai selesai!');
    }


    public function detailOngoing($id)
    {
        try {
            $detailProject = DetailProject::with(['project', 'freelancer'])
                ->where('id', $id)
                ->firstOrFail();
                
            return view('freelancer.detail_ongoing', [
                'detailProject' => $detailProject,
                'project' => $detailProject->project
            ]);
            
        } catch (\Exception $e) {
            return redirect()
                ->route('freelancer.ongoing_projects')
                ->with('error', 'Project tidak ditemukan');
        }
    }
    
    public function downloadSubmission($id)
    {
        $detailProject = DetailProject::findOrFail($id);
        
        // Cari freelancer berdasarkan user yang login
        $userId = Auth::id();
        $freelancer = Freelancer::where('user_id', $userId)->firstOrFail();
        
        // Pastikan freelancer yang request adalah pemilik submission
        if ($detailProject->freelancer_id != $freelancer->id) {
            return back()->with('error', 'Anda tidak memiliki akses ke file ini');
        }

        // Cek apakah file ada
        $filePath = 'public/submissions/' . $detailProject->submission;
        if (!Storage::exists($filePath)) {
            return back()->with('error', 'File tidak ditemukan');
        }

        // Unduh file
        return Storage::download($filePath);
    }

    public function reopenProject($id)
    {
        $project = Project::findOrFail($id);

        if ($project->status === 'close') {
            $project->status = 'open';
            $project->save();
            session()->flash('success', 'Project has been reopened successfully!');
        } else {
            session()->flash('error', 'Project not found!');
        }

        return redirect()->route('freelancer.showproject');
    }
>>>>>>> Stashed changes
}