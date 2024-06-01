<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua proyek dari database
        $projects = Project::all();
        
        // Kirim data proyek ke view menggunakan compact
        return view('projects', compact('projects'));
    }
}
