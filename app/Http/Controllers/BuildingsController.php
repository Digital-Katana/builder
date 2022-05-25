<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\BuildingPictures;
use App\Models\Floors;
use App\Models\FloorPictures;
use App\Models\Projects;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use phpDocumentor\Reflection\Project;

class BuildingsController extends Controller
{
    public function index(): Response
    {
        $buildings = Buildings::all();
        $buildingPictures = BuildingPictures::all();

        return Inertia::render('Building',[
            'buildings' => $buildings,
            'buildingPictures' => $buildingPictures
        ]);
    }

    public function single($projectID,$buildingID): Response
    {
        $building = Buildings::where('id',$buildingID)->first();
        $building->load(['project','floors']);

        return Inertia::render('Building-single',[
            'building' => $building,
        ]);
    }
}
