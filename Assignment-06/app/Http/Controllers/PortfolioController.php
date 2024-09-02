<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $infoes = Storage::json('portfolio.json', JSON_THROW_ON_ERROR);

        return view('home',compact('infoes'));
    }

    public function workExperinces()
    {
        $infoes = Storage::json('portfolio.json', JSON_THROW_ON_ERROR);

        $workExperiences =  $infoes['workExperiences'];
        // return $workExperiences;
        return view('work_experiences',compact('workExperiences','infoes'));
    }

    public function projects()
    {
        $infoes = Storage::json('portfolio.json', JSON_THROW_ON_ERROR);
        $projects =  $infoes['projects'];
        // return $projects;
        return view('projects',compact('projects','infoes'));
    }

    public function project($project)
    {
        return $project;
    }
}
