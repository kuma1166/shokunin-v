<?php

namespace App\Http\Controllers;

use App\Models\SushiArtisan;
use Illuminate\Http\Request;

class SushiArtisanController extends Controller
{
    public function index()
    {
        $sushi_artisans = SushiArtisan::all();
        return view('index', compact('sushi_artisans'));
    }
}
