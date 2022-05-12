<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\BuildingPictures;
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
        $project->pictures = ProjectsPictures::where('projectID', $projectID)->get();
        $project->buildings = Building::where('projectID',$projectID)->get();

        foreach($project->buildings as &$building) {
            $building->pictures = BuildingPictures::where('buildingID', $building->id)->get();
        }

        return Inertia::render('Project-single',[
            'project' => $project,
        ]);
    }
}
