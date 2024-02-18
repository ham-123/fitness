<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planification;
use App\Models\Cours;
use App\Models\Entraineur;
use Illuminate\Support\Facades\Auth;

class PlanificationController extends Controller
{
    public function index()
{
    $cours = Cours::all();
    $entraineurs = Entraineur::with('user')->get();
    $planifications = Planification::all();
    return view('admin.planifications.index', compact('cours', 'entraineurs','planifications'));
}
    public function create()
    {
        $cours = Cours::all();
        $entraineurs = Entraineur::all();
        return view('admin.planifications.create', compact('cours', 'entraineurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jour' => 'required|in:lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'cours_id' => 'required|exists:cours,id',
            'entraineur_id' => 'required|exists:entraineurs,id',
        ]);

        Planification::create([
            'jour' => $request->jour,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'cours_id' => $request->cours_id,
            'entraineur_id' => $request->entraineur_id,
            
        ]);

        return redirect()->route('admin.planifications.index')->with('success', 'La planification a été créée avec succès.');
    }

    public function edit(Planification $planification)
    {
       $cours = Cours::all();
        $entraineurs = Entraineur::all();
        return view('admin.planifications.edit', compact('planification', 'cours', 'entraineurs'));
    }

    public function update(Request $request, Planification $planification)
    {
        $request->validate([
            'jour' => 'required',
            'heure_debut' => 'required',
            'heure_fin' => 'required',
            'cours_id' => 'required|exists:cours,id',
            'entraineur_id' => 'required|exists:entraineurs,id',
        ]);

        $planification->update([
            'jour' => $request->jour,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'cours_id' => $request->cours_id,
            'entraineur_id' => $request->entraineur_id,
        ]);
    
        return redirect()->route('admin.planifications.index')->with('success', 'La planification a été mise à jour avec succès.');
    }
    

    public function destroy(Planification $planification)
    {
        $planification->delete();
        return redirect()->route('admin.planifications.index')->with('success', 'La planification a été supprimée avec succès.');
    }

    public function planification()
    {
       
        $cours = Cours::all();
        $entraineurs = Entraineur::with('user')->get();
        $planifications = Planification::all();
      
        
        return view('entraineur.planification', compact('cours', 'entraineurs','planifications'));
    }
    
}
