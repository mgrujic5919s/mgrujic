<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            "name" => "admin",
            "email" => "admin@pwa.rs",
            "password" => Hash::make("admin"),
            "role_id" => 1,
        ]);

        User::create([
            "name" => "user",
            "email" => "user@pwa.rs",
            "password" => Hash::make("user"),
            "role_id" => 2,
        ]);

        User::create([
            "name" => "editor",
            "email" => "editor@pwa.rs",
            "password" => Hash::make("editor"),
            "role_id" => 3,
        ]);

        User::create([
            "name" => "admin1",
            "email" => "admin1@pwa.rs",
            "password" => Hash::make("admin1"),
            "role_id" => 1,
        ]);

        User::create([
            "name" => "user1",
            "email" => "user1@user.com",
            "password" => Hash::make("user1"),
            "role_id" => 2,
        ]);

        User::create([
            "name" => "editor1",
            "email" => "editor1@editor.com",
            "password" => Hash::make("editor1"),
            "role_id" => 3,
        ]);

    }
}
