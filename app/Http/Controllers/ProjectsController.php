<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\ProjectsPictures;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectsController extends Controller
{
    public function index(): \Inertia\Response
    {
        $projects = Projects::all();
        $ProjectsPictures = ProjectsPictures::all();

        return Inertia::render('Projects',[
            'projects' => $projects,
            'projectPictures' => $ProjectsPictures
        ]);
    }

    public function single($projectID): \Inertia\Response
    {
        $project = Projects::where('id',$projectID)->first();
        $ProjectsPictures = ProjectsPictures::where('projectID', 1)->get();

        return Inertia::render('Project-single',[
            'project' => $project,
            'projectsPictures' => $ProjectsPictures
        ]);
    }
}
