<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planification;
use App\Models\Cours;
use App\Models\Entraineur;


class CliplanificationController extends Controller
{
       public function indexplanification()
    {
        $cours = Cours::all();
        $entraineurs = Entraineur::with('user')->get();
        $planifications = Planification::all();
        return view('planification', compact('cours', 'entraineurs','planifications'));
    }
}
