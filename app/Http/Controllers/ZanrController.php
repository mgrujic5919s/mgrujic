<?php

namespace App\Http\Controllers;

use App\Models\Zanr;
use Illuminate\Http\Request;

class ZanrController extends Controller
{
    public function list() {
        return view("zanrs.list", [
            "zanrovi" => Zanr::all(),
        ]);
    }

    public function list1() {
        return view("zanrs.list1", [
            "zanrovi1" => Zanr::all(),
        ]);
    }

    public function create() {
        return view("zanrs.create");
    }

    public function store(Request $request) {

        if (empty($request->naziv) or empty($request->opis)) {
            return redirect()->back()->with("error", "Naziv zanra i opis zanra su obavezni!");
        }

        Zanr::create([
            "naziv" => $request->naziv,
            "opis" => $request->opis,
        ]); 

        return redirect()->route("zanr.list")->with("success", "Zanr je uspesno kreiran i sacuvan u bazi!");
    }

    public function edit($id) {
        $zanr = Zanr::find($id);
        return view("zanrs.edit", [
            "zanr" => $zanr
        ]);
    }

    public function update(Request $request, $id) {
        if (empty($request->naziv) or empty($request->opis)) {
            return redirect()->back()->with("error", "Naziv zanra i opis zanra su obavezni!");
        }

        $zanr = Zanr::find($id);
        $zanr->naziv = $request->naziv;
        $zanr->opis = $request->opis;
        $zanr->save(); // sacuvamo izmene

        return redirect()->route("zanr.list")->with("info", "Zanr je uspesno izmenjen!");    
    }

    public function delete($id) {
        return view("zanrs.delete", [
            "id" => $id,
            "zanr" => Zanr::findOrFail($id),
        ]);
    }

    public function destroy($id) {
        $zanr = Zanr::findOrFail($id);
        $zanr->delete();

        return redirect()->route("zanr.list")->with("info", "Zanr je uspesno obrisan!");   
    }
}

