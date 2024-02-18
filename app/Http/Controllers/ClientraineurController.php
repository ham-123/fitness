<?php

namespace App\Http\Controllers;

use App\Models\Entraineur;
use Illuminate\Http\Request;


class ClientraineurController extends Controller
{ 

    public function indexentraineur(){
        $entraineurs = Entraineur::all();
    return view('entraineur', ['entraineurs' => $entraineurs]);
    }


public function show($id)
{
    $entraineur = Entraineur::find($id);


    if ($entraineur) {
       
        return view('showentraineur', ['entraineur' => $entraineur]);
    } else {
    
        return abort(404, 'Cet entraîneur n\'existe pas.');
    }
}

}

