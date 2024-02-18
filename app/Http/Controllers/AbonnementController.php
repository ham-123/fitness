<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use App\Models\TypeAbonnement;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Cours;
use Carbon\Carbon;


class AbonnementController extends Controller
{
  
    public function index()
    {
        $typeabonnement = TypeAbonnement::all();
        $dateDebut = Carbon::now()->format('Y-m-d'); 
       
    
        return view('abonnements', compact('typeabonnement', 'dateDebut'));
    } 
    public function historique()
    {
        $user = auth()->user();
        $clientId = $user->id;
        $abonnements = Abonnement::where('client_id', $clientId)->get();
    
        return view('historique-abonnements', compact('abonnements'));
    }
    
 
    public function store(Request $request, $typeAbonnement)
    {
        $dateDebut = $request->input('date_debut');
    
        $typeAbonnementData = TypeAbonnement::find($typeAbonnement);

        $cookieType = cookie('type_abonnement', $typeAbonnementData->type);
        $cookiePeriode = cookie('periode_abonnement', $typeAbonnementData->periode);
        $cookiePrix = cookie('prix_abonnement', $typeAbonnementData->prix);
        $cookieCourId = cookie('cour_id', $typeAbonnementData->cours_id);
        $cookieDateDebut = cookie('date_debut', $dateDebut);
        $cookieTypeAbonnement = cookie('type_abonnement_id', $typeAbonnementData->id);
        return redirect()->route('confirmation')
            ->withCookie($cookieType)
            ->withCookie($cookiePeriode)
            ->withCookie($cookiePrix)
            ->withCookie($cookieDateDebut)
            ->withCookie($cookieTypeAbonnement)
            ->withCookie($cookieCourId);
            
    }  
    public function show(Request $request)
{
    $typeAbonnement = $request->cookie('type_abonnement');
    $periodeAbonnement = $request->cookie('periode_abonnement');
    $prixAbonnement = $request->cookie('prix_abonnement');
    $dateDebut = $request->cookie('date_debut');
    $courId = $request->cookie('cour_id');

    $cours = Cours::find($courId);
    $nomCours = $cours ? $cours->nom_cours : 'Non défini';

    return view('confirmationabonnement', [
        'typeAbonnement' => $typeAbonnement,
        'periodeAbonnement' => $periodeAbonnement,
        'prixAbonnement' => $prixAbonnement,
        'dateDebut' => $dateDebut,
        'nomCours' => $nomCours,
    ]);
}
public function processPayment(Request $request)
{

    $typeAbonnementId = $request->cookie('type_abonnement_id');
    $dateDebut = $request->cookie('date_debut');

    $typeAbonnementData = TypeAbonnement::find($typeAbonnementId);

    if (!$typeAbonnementData) {
        return redirect()->route('abonnements')->with('error', 'Type d\'abonnement invalide.');
    }

    $periode = $typeAbonnementData->periode;
    $prix = $typeAbonnementData->prix;
    $dateFin = null;

    if ($periode === 'JOUR') {
        $dateFin = Carbon::parse($dateDebut)->addDays(1)->format('Y-m-d');
    } elseif ($periode === 'SEMAINE') {
        $dateFin = Carbon::parse($dateDebut)->addWeek()->format('Y-m-d');
    } elseif ($periode === 'MOIS') {
        $dateFin = Carbon::parse($dateDebut)->addMonth()->format('Y-m-d');
    }
    $clientId = auth()->user()->id;

    DB::table('abonnements')->insert([
        'date_debut' => Carbon::parse($dateDebut)->format('Y-m-d'),
        'date_fin' => $dateFin,
        'client_id' => $clientId,
        'type_abonnement_id' => $typeAbonnementId,
    ]);

    return redirect()->route('abonnements')->with('success', 'Paiement réussi ! Votre abonnement à été effectuer avec succés');
}



}
