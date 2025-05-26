<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (Auth::check()) {
        //     return redirect()->back();
        // }

        // prvo proverim da li je korisnik uopste ulogovan 
        // if (!Auth::check()) {
        //     // to znaci da korisnik nije ulogovan \ 
        //     return redirect()->route("login")->with("error", "Da biste pristupili ovoj stranici morate se ulogovati kao user!");
        // }

        // ako je korisnik ulogovan, proveriti da li je ulogovan kao user, ako nije onda nema pristup strani 
        if (Auth::check() && Auth::user()->role_id != 2) {
            // to znaci da trenutno ulogovani korisnik nije user 
            //return redirect()->route("not-auth");
        }

        return $next($request);
    }
}
