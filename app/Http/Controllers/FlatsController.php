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

class FlatsController extends Controller
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

    public function single($buildingID,$projectID,$floorID,$flatID): Response
    {
        $flat = Flats::where('id',$flatID)->first();
        $flat->project = Projects::where('id',$projectID)->first();
        $flat->building = Buildings::where('id',$buildingID)->first();
        $flat->floor = Floors::where('id',$floorID)->first();
        $flat->pictures = FlatPictures::where('flatID', $flatID)->get();

        $price = 0;
        if ($flat->project->sqPrice) {
            $price = $flat->project->sqPrice;
        }
        if ($flat->building->sqPrice) {
            $price = $flat->building->sqPrice;
        }
        if ($flat->floor->sqPrice) {
            $price = $flat->floor->sqPrice;
        }
        if ($flat->sqPrice) {
            $price = $flat->sqPrice;
        }
        $flat->sqPrice = $price;

        return Inertia::render('Flat-single',[
            'flat' => $flat,
        ]);
    }
}
