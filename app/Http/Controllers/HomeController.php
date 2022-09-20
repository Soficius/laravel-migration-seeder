<?php

namespace App\Http\Controllers;

use App\Trains;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Trains::all();
        return view('home', compact('trains'));
    }
}
