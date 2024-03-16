<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categoria;
use App\Models\Producte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Categoria::create([
            'nom' => 'Tapes',
        ]);
        Categoria::create([
            'nom' => 'Begudes',
        ]);
        Producte::create([
            'nom' => 'Cervesa',
            'preu' => 2.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Vi',
            'preu' => 3.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Cava',
            'preu' => 3.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Refresc',
            'preu' => 2.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Aigua',
            'preu' => 1.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Cava +',
            'preu' => 4.0,
            'categoria_id' => 2,
        ]);
        Producte::create([
            'nom' => 'Ostro',
            'preu' => 4.0,
            'categoria_id' => 1,
        ]);
        Producte::create([
            'nom' => 'Tallarines',
            'preu' => 4.0,
            'categoria_id' => 1,
        ]);
        Producte::create([
            'nom' => 'Musclos',
            'preu' => 3.0,
            'categoria_id' => 1,
        ]);
        Producte::create([
            'nom' => 'Torrades',
            'preu' => 3.0,
            'categoria_id' => 1,
        ]);
        Producte::create([
            'nom' => 'Coctel de gambes',
            'preu' => 3.0,
            'categoria_id' => 1,
        ]);


    }
}
