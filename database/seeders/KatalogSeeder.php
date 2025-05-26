<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $katalog = new Katalog();
        $katalog->videoigra = "Dota 2";
        $katalog->cena = "150.00";
        $katalog->zanr_id = 1;
        $katalog->platforma_id = 1;
        $katalog->image = "1748206852.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "Star Wars";
        $katalog->cena = "100.00";
        $katalog->zanr_id = 5;
        $katalog->platforma_id = 5;
        $katalog->image = "1748207584.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "Assasians Creed";
        $katalog->cena = "1200.00";
        $katalog->zanr_id = 4;
        $katalog->platforma_id = 2;
        $katalog->image = "1748207855.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "Valorant";
        $katalog->cena = "240.00";
        $katalog->zanr_id = 4;
        $katalog->platforma_id = 3;
        $katalog->image = "1748207940.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "NBA 2022";
        $katalog->cena = "500.00";
        $katalog->zanr_id = 2;
        $katalog->platforma_id = 1;
        $katalog->image = "1748208822.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "PES";
        $katalog->cena = "1300.00";
        $katalog->zanr_id = 2;
        $katalog->platforma_id = 1;
        $katalog->image = "1748208986.jpg";
        $katalog->save();

        $katalog = new Katalog();
        $katalog->videoigra = "Warcraft";
        $katalog->cena = "700.00";
        $katalog->zanr_id = 3;
        $katalog->platforma_id = 4;
        $katalog->image = "1748209090.jpg";
        $katalog->save();

    }
}
