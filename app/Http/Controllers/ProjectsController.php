<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\BuildingPictures;
use App\Models\Projects;
use App\Models\ProjectsPictures;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectsController extends Controller
{
    public function index(): Response
    {
        $projects = Projects::all();
        $ProjectsPictures = ProjectsPictures::where('type', 'RENDER')->get();;

        return Inertia::render('Projects', [
            'projects' => $projects,
            'projectPictures' => $ProjectsPictures
        ]);
    }

    public function single($projectID): Response
    {
        $project = Projects::where('id', $projectID)->first();

        foreach ($project->buildings as &$building) {
            $building->pictures = BuildingPictures::where('buildingID', $building->id)->get();
        }

        return Inertia::render('Project-single', [
            'project' => $project,
        ]);
    }
}
