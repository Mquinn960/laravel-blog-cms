<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller {

    public function getProjects() {
        return view('pages.projects');
    }

}
