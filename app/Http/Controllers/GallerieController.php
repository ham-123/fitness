<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galerie = Galerie::all();
        return view('admin.galleries.index', compact('galerie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourner la vue create avec un formulaire qui permet d'ajouter une image
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Créer une nouvelle instance du modèle Galerie
        $galerie = new Galerie();

        // Appeler la méthode saveImage avec le fichier image
        $galerie->saveImage($request->file('image'));

        // Rediriger vers la vue index avec un message de succès
        return redirect()->route('admin.galleries.index')->with('success', 'Image ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retourner la vue show avec la variable $galerie qui contient l'image correspondant à l'id passé en paramètre
        return view('admin.galleries.show', ['galerie' => Galerie::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Trouver l'instance du modèle Galerie correspondant à l'id
        $galerie = Galerie::findOrFail($id);

        // Appeler la méthode deleteImage pour supprimer l'image du dossier storage/app/public
        $galerie->deleteImage();

        // Appeler la méthode delete pour supprimer l'image de la base de données
        $galerie->delete();

        // Rediriger vers la vue index avec un message de succès
        return redirect()->route('admin.galleries.index')->with('success', 'Image supprimée avec succès.');
    }
}