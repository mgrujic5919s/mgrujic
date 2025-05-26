<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Comentar;
use Illuminate\Http\Request;

class ComentarController extends Controller
{
    public function list() {
        return view("comentars.list", [
            "comentari" => Comentar::all(),
        ]);
    }

    public function list1() {
        return view("comentars.list1", [
            "comentari1" => Comentar::all(),
        ]);
    }

    public function create() {
        return view("comentars.create", [
            "katalozi" => Katalog::all(),
        ]);
    }


    public function store(Request $request) {
        if (empty($request->katalog_id) or empty($request->komentar)) {
            return redirect()->back()->with("error", "Morate izabrati videoigru i uneti komentar!");
        }

        Comentar::create([
            "komentar" => $request->komentar,
            "katalog_id" => $request->katalog_id,
        ]);

        return redirect()->route("comentari.list")->with("success", "Uspesno dodat novi komentar!");
    }


    public function edit($id) {
        $comentar = Comentar::find($id);
        return view("comentars.edit", [
            "comentar" => $comentar     //ovo je OK
        ]);
    }

    public function update(Request $request, $id) {
        // if (empty($request->komentar)) {
        if (empty($request->komentar) or empty($request->katalog_id)) {
        return redirect()->back()->with("error", "Komentar i videoigra su obavezni!");
    }

    $comentar = Comentar::find($id);
    $comentar->komentar = $request->komentar;
    $comentar->katalog_id = $request->katalog_id;
    $comentar->save(); 

    return redirect()->route("comentari.list")->with("info", "Komentar je uspesno izmenjen!");    
    }


    public function delete($id) {
        return view("comentars.delete", [
            "id" => $id,
            "comentar" => Comentar::findOrFail($id),
        ]);
    }


    public function destroy($id) {
        $comentar = Comentar::findOrFail($id);
        $comentar->delete();

        return redirect()->route("comentari.list")->with("info", "Komentar je uspesno obrisan iz baze!");   
    }

}


