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
        $floor->building->load(['project']);
        $floor->load(['flats']);
        return Inertia::render('Floor-single',[
            'floor' => $floor,
        ]);
    }
}
