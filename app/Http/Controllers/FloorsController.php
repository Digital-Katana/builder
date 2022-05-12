<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\BuildingPictures;
use App\Models\FlatPictures;
use App\Models\Flats;
use App\Models\Floors;
use App\Models\FloorPictures;
use App\Models\Projects;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use phpDocumentor\Reflection\Project;

class FloorsController extends Controller
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

    public function single($projectID,$buildingID,$floorID): Response
    {
        $floor = Floors::where('id',$floorID)->first();
        $floor->project = Projects::where('id',$projectID)->first();
        $floor->building = Buildings::where('id',$buildingID)->first();
        $floor->pictures = FloorPictures::where('floorID', $floorID)->get();
        $floor->flats = Flats::where('floorID', $floorID)->get();

        foreach($floor->flats as &$flat) {
            $flat->pictures = FlatPictures::where('flatID', $flat->id)->get();
        }

        return Inertia::render('Floor-single',[
            'floor' => $floor,
        ]);
    }
}
