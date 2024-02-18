<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;

class CligallerieController extends Controller
{
    public function indexgallerie()
    {
        $galleries = Galerie::all();
        return view('gallerie', compact('galleries'));
    }
}

