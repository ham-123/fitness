<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle($request, Closure $next)
{
    if(Auth::check()) {
        $user = Auth::user();
        if($user != null && $user->is_admin) {
            
            return view('admin.dashboard');  
        } else {
           
            return redirect()->route('login')->with('error', 'Vous devez être connecté en tant qu\'administrateur pour accéder à cette page.');
        }
    } else {
         
        return redirect()->route('login')->with('error', 'Vous devez vous connecter pour accéder à cette page.');
    }
    
}

}
