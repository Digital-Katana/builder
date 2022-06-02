<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\ProjectsPictures;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminpanelController extends Controller
{
    public function getProjects(){
        $projects = Projects::paginate(15);

        return Inertia::render('Admin/projects', [
            'projects' => $projects,
        ]);
    }
}
