<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\BuildingPictures;
use App\Models\Floor;
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
        $buildings = Building::all();
        $buildingPictures = BuildingPictures::all();

        return Inertia::render('Building',[
            'buildings' => $buildings,
            'buildingPictures' => $buildingPictures
        ]);
    }

    public function single($buildingID,$projectID): Response
    {
        $building = Building::where('id',$buildingID)->first();
        $building->project = Projects::where('id',$building->projectID)->first();
        $building->pictures = BuildingPictures::where('buildingID', $building->id)->get();
        $building->floors = Floor::where('buildingID', $building->id)->get();

        foreach($building->floors as &$floor) {
            $floor->pictures = FloorPictures::where('floorID', $floor->id)->get();
        }

        return Inertia::render('Building-single',[
            'building' => $building,
        ]);
    }
}
