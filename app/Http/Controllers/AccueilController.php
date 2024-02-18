<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
     // Importez la façade DB

public function home()
{
    $cours = Cours::all();
    return view ('Home', ['cours' => $cours]);
}
}

