<?php

namespace App\Http\Controllers;

use App\Models\Platforma;
use Illuminate\Http\Request;

class PlatformaController extends Controller
{
    public function list() {
        return view("platformas.list", [
            "platforme" => Platforma::all(),
        ]);
    }

    public function list1() {
        return view("platformas.list1", [
            "platforme1" => Platforma::all(),
        ]);
    }

    public function create() {
        return view("platformas.create");
    }

    public function store(Request $request) {

        if (empty($request->naziv) or empty($request->opis)) {
            return redirect()->back()->with("error", "Naziv platforme i opis platforme su obavezni!");
        }

        Platforma::create([
            "naziv" => $request->naziv,
            "opis" => $request->opis,
        ]); 

        return redirect()->route("platforma.list")->with("success", "Platforma je uspesno kreirana!");
    }

    public function edit($id) {
        $platforma = Platforma::find($id);
        return view("platformas.edit", [
            "platforma" => $platforma
        ]);
    }

    public function update(Request $request, $id) {
        if (empty($request->naziv) or empty($request->opis)) {
            return redirect()->back()->with("error", "Naziv platforme i opis platforme su obavezni!");
        }

        $platforma = Platforma::find($id);
        $platforma->naziv = $request->naziv;
        $platforma->opis = $request->opis;
        $platforma->save(); 

        return redirect()->route("platforma.list")->with("info", "Platforma je uspesno izmenjena!");    
    }

    public function delete($id) {
        return view("platformas.delete", [
            "id" => $id,
            "platforma" => Platforma::findOrFail($id),
        ]);
    }

    public function destroy($id) {
        $platforma = Platforma::findOrFail($id);
        $platforma->delete();

        return redirect()->route("platforma.list")->with("info", "Platforma je uspesno obrisana!");   
    }
}

