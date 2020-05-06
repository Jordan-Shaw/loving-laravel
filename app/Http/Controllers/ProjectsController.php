<?php

namespace App\Http\Controllers;

use DB;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show($slug) {
        $project = Project::where('slug', $slug)->firstOrFail();

        return view('pages.project', [
            'project' => $project
        ]);
    }
}
