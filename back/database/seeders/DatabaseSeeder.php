<?php

namespace Database\Seeders;

use App\Models\Carrusel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        Carrusel::create(["src"=>"1.png"]);
        Carrusel::create(["src"=>"2.png"]);
        Carrusel::create(["src"=>"3.png"]);

    }
}
