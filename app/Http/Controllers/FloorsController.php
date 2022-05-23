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
        $floors = Floors::all();
        $floorPictures = Floors::where('type' , 'RENDER')->get();

        return Inertia::render('Building',[
            'Floors' => $floors,
            'buildingPictures' => $floorPictures
        ]);
    }

    public function single($projectID,$buildingID,$floorID): Response
    {
        $floor = Floors::where('id',$floorID)->first();
        $floor->project = Projects::where('id',$projectID)->first();
        $floor->building = Buildings::where('id',$buildingID)->first();
        $floor->renders = FloorPictures::where(['floorID' => $floorID, 'type' => 'RENDER'])->get();
        $floor->blueprints = FloorPictures::where(['floorID' => $floorID, 'type' => 'BLUEPRINT'])->get();
        $floor->flats = Flats::where('floorID', $floorID)->get();

        foreach($floor->flats as &$flat) {
            $flat->pictures = FlatPictures::where('flatID', $flat->id)->get();
            $flat->sqPrice = $flat->getprice();;
        }

        return Inertia::render('Floor-single',[
            'floor' => $floor,
        ]);
    }
}
