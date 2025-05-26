<?php

namespace Database\Seeders;

use App\Models\Platforma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlatformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforma = new Platforma();
        $platforma->naziv = "PS5";
        $platforma->opis = "Play Station 5 platforma";
        $platforma->save();

        $platforma = new Platforma();
        $platforma->naziv = "PS4";
        $platforma->opis = "Play Station 4 platforma";
        $platforma->save();

        $platforma = new Platforma();
        $platforma->naziv = "Nintendo";
        $platforma->opis = "Nintendo Switch OLED platforma";
        $platforma->save();

        $platforma = new Platforma();
        $platforma->naziv = "XBOX 360";
        $platforma->opis = "XBOX 360 / XBOX One platforma";
        $platforma->save();

        $platforma = new Platforma();
        $platforma->naziv = "PC";
        $platforma->opis = "PC platforma";
        $platforma->save();

    }
}
