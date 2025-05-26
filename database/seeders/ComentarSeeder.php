<?php

namespace Database\Seeders;

use App\Models\Comentar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comentar::create([
            "komentar" => "Ovo je prvi komentar na prvoj video igri",
            "katalog_id" => 1,
        ]);

        Comentar::create([
            "komentar" => "Ovo je drugi komentar na prvoj video igri",
            "katalog_id" => 1,
        ]);

        Comentar::create([
            "komentar" => "Ovo je treci komentar na prvoj video igri",
            "katalog_id" => 1,
        ]);

        Comentar::create([
            "komentar" => "Ovo je prvi komentar na drugoj video igri",
            "katalog_id" => 2,
        ]);

        Comentar::create([
            "komentar" => "Ovo je drugi komentar na drugoj video igri",
            "katalog_id" => 2,
        ]);

        Comentar::create([
            "komentar" => "Ovo je prvi komentar na trecoj video igri",
            "katalog_id" => 3,
        ]);

    }
}
