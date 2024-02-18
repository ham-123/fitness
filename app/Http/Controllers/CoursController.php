<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cours;
use Illuminate\Http\Request;



class CoursController extends Controller
{
    public function index()
    {
        $cours = Cours::all();
        return view('admin.cours.index', compact('cours'));
    }

    public function create()
    {
        return view('admin.cours.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_cours' => 'required',
            'description' => 'required',
        ]);

        $cours = Cours::create([
            'nom_cours' => $request->input('nom_cours'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.cours.index')->with('success', 'Le cours a été créé avec succès.');
    }

    public function edit(Cours $cours)
    {
        return view('admin.cours.edit', compact('cours'));
    }

    public function update(Request $request, Cours $cours)
    {
        $request->validate([
            'nom_cours' => 'required',
            'description' => 'required',
        ]);

        $cours->nom_cours = $request->input('nom_cours');
        $cours->description = $request->input('description');
        $cours->save();

        return redirect()->route('admin.cours.index')->with('success', 'Le cours a été modifié avec succès.');
    }

    public function destroy(Cours $cours)
    {
        $cours->delete();
        return redirect()->route('admin.cours.index')->with('success', 'Le cours a été supprimé avec succès.');
    }
}
