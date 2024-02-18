<?php

namespace App\Http\Controllers;
use App\Models\Abonnement;

use Illuminate\Http\Request;

class AdminAbonnementController extends Controller
{
    public function index()
{
    $abonnements = Abonnement::all();

    return view('admin.abonnements.index', ['abonnements' => $abonnements]);
}
}
