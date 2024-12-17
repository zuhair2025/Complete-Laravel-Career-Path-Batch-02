<?php

namespace App\Http\Controllers;

use App\Models\VaccineCenter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vaccineCenters = VaccineCenter::all();
        return view('index',compact('vaccineCenters'));
    }
}
