<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\SushiArtisan;
use Illuminate\Http\Request;

class SushiArtisanController extends Controller
{
    public function index()
    {
        $sushi_artisans = SushiArtisan::all();
        return view('index', compact('sushi_artisans'));
    }

    public function show($id)
    {
        $sushi_artisan = SushiArtisan::findOrFail($id);
        return view('sushi_artisan_detail', compact('sushi_artisan'));
    }

    public function select($package_id, $sushi_artisan_id)
    {
        $sushi_artisan = SushiArtisan::findOrFail($sushi_artisan_id);
        return view('sushi_artisan_select', compact('package_id', 'sushi_artisan'));
    }
}
