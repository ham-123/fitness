<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipement;

class CliequipementController extends Controller
{
    public function indexequipement()
    {
        $equipements = Equipement::all();
        return view('equipement', ['equipements' => $equipements]);
    }
}
