<?php

namespace App\Http\Controllers;

use App\Models\Buildings;
use App\Models\BuildingPictures;
use App\Models\Floors;
use App\Models\FloorPictures;
use App\Models\Projects;
use App\Models\ProjectsPictures;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use phpDocumentor\Reflection\Project;

class WelcomeController extends Controller
{
    public function index(): Response
    {
        $ProjectsPictures = ProjectsPictures::where('type', 'RENDER')->get();;

        return Inertia::render('Welcome', [
            'projectPictures' => $ProjectsPictures
        ]);
    }
}
