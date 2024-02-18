<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'sexe' => ['required', 'string'],
            'age' => ['required', 'integer', 'min:18'],
            'adresse' => ['required', 'string'],
            'type_client' => ['required', 'string' ],
            'tel' => ['nullable', 'integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);

        $client = Client::create([
            'sexe' => $request->sexe,
            'age' => $request->age,
            'adresse' => $request->adresse,
            'type_client' => $request->type_client,
            'user_id' => $user->id,
        ]);

       

        event(new Registered($user,$client));

        Auth::login($user);

        
    return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter pour accéder à votre compte.');

    }
}
