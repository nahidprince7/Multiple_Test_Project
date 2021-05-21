<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('users')->get();
        $projectsWithManagers = Project::with('users')->get();
//        dd($projects);
        return view('pages.project',compact('projects','projectsWithManagers'));
    }
}
