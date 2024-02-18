<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entraineur;
use App\Models\User;
use App\Models\Cours;

class EntraineurController extends Controller
{

    public function index()
    {
        $entraineurs = Entraineur::all();
        $users = User::all(); // ou toute autre méthode pour obtenir les utilisateurs
        return view('admin.entraineurs.index', ['entraineurs' => $entraineurs, 'users' => $users]);
    }

    public function create()
    {
        $cours = Cours::all();
        return view('admin.entraineurs.create', compact('cours'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'tel' => 'required|string|max:20|unique:users,tel',
            'cours_id' => 'required|exists:cours,id'
        ]);

        $user = User::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'password' => bcrypt('entraineur')
        ]);


        $entraineur = new Entraineur([
            'user_id' => $user->id,
            'cours_id' => $request->input('cours_id')
        ]);

        if ($request->hasFile('image')) {
            $entraineur->saveImage($request->file('image'));
        }

        $entraineur->save();

        return redirect()->route('admin.entraineurs.index')->with('success', 'L\'entraineur a été créé avec succès.');
    }


    public function show(Entraineur $entraineur)
    {
        return view('admin.entraineurs.show', ['entraineur' => $entraineur]);
    }

    public function edit(Entraineur $entraineur)
    {
        $cours = Cours::all();
        return view('admin.entraineurs.edit', compact('entraineur'))->with('cours', $cours);
    }

    public function update(Request $request, Entraineur $entraineur)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email,' . $entraineur->user_id,
            'tel' => 'required',
            'image' => 'nullable|image',
            'cours_id' => 'required|exists:cours,id'
        ]);

        $entraineur->user->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
        ]);

        $entraineur->update([
            'cours_id' => $request->input('cours_id')
        ]);

        if ($request->hasFile('image')) {
            $entraineur->saveImage($request->file('image'));
        }

        return redirect()->route('admin.entraineurs.index')->with('success', 'L\'entraineur a été modifié avec succès.');
    }

    public function destroy(Entraineur $entraineur)
    {
        $user = $entraineur->user; 
        $entraineur->delete(); 

        if ($user) {
            $user->delete(); 
        }

        return redirect()->route('admin.entraineurs.index')->with('success', 'L\'entraineur a été supprimé avec succès.');
    }

    public function getByCours(Request $request)
    {
        $cours_id = $request->input('cours_id');
        $entraineurs = Entraineur::whereHas('cours', function($query) use ($cours_id) {
            $query->where('id', $cours_id);
        })->with('user')->get();
        
        return response()->json($entraineurs);
    }
    
}
