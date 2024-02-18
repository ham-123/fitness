<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipement;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipements = Equipement::all();
        return view('admin.equipement.index', compact('equipements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.equipement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $equipement = new Equipement([
            'nom' => $request->get('nom'),
            'description' => $request->get('description'),
        ]);

        if ($request->hasFile('image')) {
            $equipement->saveImage($request->file('image'));
        }

        

        return redirect()->route('admin.equipement.index')->with('success', 'L\'équipement a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $equipement = Equipement::findOrFail($id);
        return view('admin.equipement.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $equipement = Equipement::findOrFail($id);
        return view('admin.equipement.edit', compact('equipement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $equipement = Equipement::findOrFail($id);
        $equipement->nom = $request->get('nom');
        $equipement->description = $request->get('description');

        if ($request->hasFile('image')) {
            $equipement->deleteImage();
            $equipement->saveImage($request->file('image'));
        }

        $equipement->save();

        return redirect()->route('admin.equipement.index')->with('success', 'L\'équipement a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipement = Equipement::findOrFail($id);
        if ($equipement->hasImage()) { // Ajoutez cette condition pour vérifier si l'équipement a une image
          $equipement->deleteImage();
        }
        $equipement->delete();
        return redirect()->route('admin.equipement.index')->with('success', 'L\'équipement a été supprimé avec succès.');
    }
}
