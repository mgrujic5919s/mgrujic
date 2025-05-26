<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use App\Models\Katalog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function notAuth() {
        return view('auth.not-auth');
    }

        
    public function akcija() {
        return view("katalogs.akcija", [
            // ovde ubaciti neku akcijsku ponudu npr. cena ispod nekog limita 
            "katalozi1" => Katalog::all(),
        ]);
    }

    public function oNama() {
        return view('auth.o-nama');
    }

    public function kontakt() {
        return view('auth.kontakt');
    }

    public function login() {
        return view("auth.login");
    }

    public function storeLogin(Request $request) {
        if (empty($request->email) or empty($request->password)) {
            return redirect()->route("login")->with("error", "Morate da popunite sva polja!");
        }

        if (Auth::attempt($request->only("email", "password"))) {
            // login je uspeo
            return redirect()->route("katalog.list");
           }

        // ako Auth::attemp nije prosao onda prikazi gresku 
        return redirect()->route("login")->with("error", "Nepostojeci podaci za logovanje!");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("login");
    }

    public function register() {
        return view("auth.register");
    }

    public function storeRegister(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4",
        ]);

        $userRole = Role::where('name', 'user')->first();

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role_id" => $userRole->id,
        ]);

        return redirect()->route("login")->with("success", "Registracija je prosla uspesno! Mozete se ulogovati!");
    }
}
