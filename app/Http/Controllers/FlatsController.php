<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\BuildingPictures;
use App\Models\FlatPictures;
use App\Models\Flats;
use App\Models\Floors;
use App\Models\FloorPictures;
use App\Models\Projects;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use phpDocumentor\Reflection\Project;

class FlatsController extends Controller
{
    public function index(): Response
    {
        $buildings = Buildings::all();
        $buildingPictures = BuildingPictures::all();

        return Inertia::render('Building', [
            'buildings' => $buildings,
            'buildingPictures' => $buildingPictures
        ]);
    }

    public function single($projectID, $buildingID, $floorID, $flatID): Response
    {
        $flat = Flats::where('id', $flatID)->first();
        $flat->floor->building->load('project');
        return Inertia::render('Flat-single', [
            'flat' => $flat,
        ]);
    }

    public function findflats(): Response
    {

        $floors = Floors::all();
        $buildings = Buildings::all();
        $projects = Projects::all();

        return Inertia::render('Find-flats', [
            'floors' => $floors,
            'buildings' => $buildings,
            'projects' => $projects
        ]);
    }

    public function getflats(Request $request): Response
    {
        $filters = $request->validate([
            "projectID" => 'required',
            "buildingID" => 'required',
            "sqmFrom" => 'required',
            "sqmTo" => 'required|greater_than_field:sqmFrom',
            "priceFrom" => 'required',
            "priceTo" => 'required|greater_than_field:priceFrom',
            "hasBalcony" => 'required',
            "floorFrom" => 'required',
            "floorTo" => 'required|greater_than_field:floorFrom',
            "directions" => [
                "north" => 'required',
                "south" => 'required',
                "east" => 'required',
                "west" => 'required',
            ],
            "page" => 'required',
            "orderby" => 'required',
        ]);


        $flats = Flats::whereHas('floor', function (Builder $query) use ($filters) {
            $query
                ->where('floorNumber', '>=', $filters['floorFrom'])
                ->where('floorNumber', '<=', $filters['floorTo'])
                ->whereHas('building', function (Builder $query) use ($filters) {
                    if ($filters['buildingID'] != 'all') {
                        $query->where('buildings.id', $filters['buildingID']);
                    }
                    $query
                        ->whereHas('project', function (Builder $query) use ($filters) {
                            if ($filters['projectID'] != 'all') {
                                $query->where('projects.id', $filters['projectID']);
                            }
                        });
                });
        })
            ->where('sumSQM', '>=', $filters['sqmFrom'])
            ->where('sumSQM', '<=', $filters['sqmTo'])
            ->where(DB::raw('(sumSQM * sqPrice)'), '>=' , $filters['priceFrom'])
            ->where(DB::raw('(sumSQM * sqPrice)'), '<=' , $filters['priceTo']);


        // Has Balcony
        if ($filters['hasBalcony'] != 'all') {
            if ($filters['hasBalcony'] == 'yes') {
                $flats->where('hasBalcony', 1);
            } else {
                $flats->where('hasBalcony', 0);
            }
        }


        // Directions
        $directions = [];
        foreach ($filters["directions"] as $key => $direction) {
            if ($direction) {
                $directions[] = strtoupper($key);
            }
        }
        if (!empty($directions)) {
            $flats->whereIn('compassDirection', $directions);
        }

        // Order by
        if ($filters['orderby'] == 'sqm-asc') {
            $flats->orderBy('sumSQM', 'asc');
        } elseif ($filters['orderby'] == 'sqm-desc') {
            $flats->orderBy('sumSQM', 'desc');
        } elseif ($filters['orderby'] == 'pricesqm-asc') {
            $flats->orderBy('sqPrice', 'asc');
        } elseif ($filters['orderby'] == 'pricesqm-desc') {
            $flats->orderBy('sqPrice', 'desc');
        } elseif ($filters['orderby'] == 'price-asc') {
            $flats->orderByRaw('(sumSQM * sqPrice) asc');
        } elseif ($filters['orderby'] == 'price-desc') {
            $flats->orderByRaw('(sumSQM * sqPrice) desc');
        }


        $flats = $flats->paginate(30);
        $collection = $flats->getCollection();

        foreach ($collection as &$flat) {
            $flat->floor->building->load('project');
        }

        $flats->setcollection($collection);

        $floors = Floors::all();
        $buildings = Buildings::all();
        $projects = Projects::all();

        return Inertia::render('Find-flats', [
            'flats' => $flats,
            'floors' => $floors,
            'buildings' => $buildings,
            'projects' => $projects
        ]);

    }
}
