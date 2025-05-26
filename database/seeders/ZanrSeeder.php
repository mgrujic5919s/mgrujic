<?php

namespace Database\Seeders;

use App\Models\Zanr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZanrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $zanr = new Zanr();
        $zanr->naziv = "Avantura";
        $zanr->opis = "Avanturističke igre, akcione igre, opstanak, horor";
        $zanr->save();

        $zanr = new Zanr();
        $zanr->naziv = "Sport";
        $zanr->opis = "Sportske igre, fudbal, košarka, motosport, boks";
        $zanr->save();

        $zanr = new Zanr();
        $zanr->naziv = "Pucanje";
        $zanr->opis = "FPS, TPS, zombie i battle royale pucačke igre";
        $zanr->save();

        $zanr = new Zanr();
        $zanr->naziv = "Strategija";
        $zanr->opis = "Kritičko razmišljanje, rešavanja problema, donošenja odluka";
        $zanr->save();

        $zanr = new Zanr();
        $zanr->naziv = "Akcija";
        $zanr->opis = "Akcija, borbene igre, udaracke igre, platformske igre";
        $zanr->save();
    }
}
