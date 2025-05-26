<?php

namespace App\Http\Controllers;

use App\Models\Platforma;
use App\Models\Zanr;
use App\Models\Katalog;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index() {
        return view("katalogs.list", [
            "katalozi" => Katalog::all(),
        ]);
    }


    public function index2() {
        return view("katalogs.list", [
            "katalozi" => Katalog::all(),
        ]);
    }

    public function index1() {
        return view("katalogs.list1", [
            "katalozi1" => Katalog::all(),
        ]);
    }

    public function opsirnije($id) {
        $katalog = Katalog::find($id);
        return view("katalogs.opsirnije", [
            "katalog" => $katalog,
            "zanrovi1" => Zanr::all(),
            "platforme1" => Platforma::all(),
        ]);
    }

    public function create() {
    return view("katalogs.create", [
        "zanrovi" => Zanr::all(),
        "platforme" => Platforma::all(),
    ]);
    }
    
    public function store(Request $request) {

        if (empty($request->videoigra) or empty($request->cena)) {
            return redirect()->back()->with("error", "Naziv videoigre i cena su obavezni!");
        }

        $request->validate([
            'videoigra' => 'required|string|max:256',
            'cena' => 'required|numeric|min:0',
            'zanr_id' => 'required|min:0',
            'platforma_id' => 'required|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Katalog::create([
        //     "videoigra" => $request->videoigra,
        //     "cena" => $request->cena,
        //     "zanr_id" => $request->zanr_id,
        //     "platforma_id" => $request->platforma_id,
        // ]); 

        $katalog = new Katalog();
        
        $katalog->videoigra = $request->videoigra;
        $katalog->cena = $request->cena;
        $katalog->zanr_id = $request->zanr_id;
        $katalog->platforma_id = $request->platforma_id;

        if ($request->hasFile("image")) {
            $imageFile = $request->file("image");
            // 12345 . jpg
            $imageName = time() . "." . $imageFile->getClientOriginalExtension();
            // 123456 . png
            $imagePath = $imageFile->storeAs("katalog_images", $imageName, 'public');
            $katalog->image = $imagePath;
        }

        $katalog->save();

        return redirect(url("/"))->with("success", "Videoigra je uspesno kreirana i sacuvana u bazi!");
    }

    public function edit($id) {
        $katalog = Katalog::find($id);
        return view("katalogs.edit", [
            "katalog" => $katalog,
            "zanrovi1" => Zanr::all(),
            "platforme1" => Platforma::all(),
        ]);
      
    }

    public function update(Request $request, $id) {
        if (empty($request->videoigra) or empty($request->cena)) {
            return redirect()->back()->with("error", "Naziv videoigre i cena su obavezni!");
        }

        $katalog = Katalog::find($id);
        $katalog->videoigra = $request->videoigra;
        $katalog->cena = $request->cena;
        $katalog->zanr_id = $request->zanr_id;
        $katalog->platforma_id = $request->platforma_id;
        $katalog->save(); 

        return redirect(url("/"))->with("info", "Videoigra je uspesno izmenjena!");
    }

    public function delete($id) {
        return view("katalogs.delete", [
            "id" => $id,
            "katalog" => Katalog::findOrFail($id),
        ]);
    }

    public function destroy($id) {
        $katalog = Katalog::findOrFail($id);
        $katalog->delete();

        return redirect(url("/"))->with("success", "Videoigra je uspesno obrisana!");
    }

}

