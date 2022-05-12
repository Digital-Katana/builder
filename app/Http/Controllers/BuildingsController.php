<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\BuildingPictures;
use App\Models\Projects;
use Illuminate\Http\Request;
use Inertia\Inertia;
use phpDocumentor\Reflection\Project;

class BuildingsController extends Controller
{
    public function index(): \Inertia\Response
    {
        $buildings = Building::all();
        $buildingPictures = BuildingPictures::all();

        return Inertia::render('Building',[
            'buildings' => $buildings,
            'buildingPictures' => $buildingPictures
        ]);
    }

    public function single($buildingID,$projectID): \Inertia\Response
    {
        $buildings = Building::where('id',$buildingID)->first();
        $buildingPictures = BuildingPictures::where('buildingID', $buildingID)->get();
        $project = Projects::where('id',$projectID)->first();
        return Inertia::render('Building-single',[
            'buildings' => $buildings,
            'buildingPictures' => $buildingPictures,
            'project' => $project
        ]);
    }
}
