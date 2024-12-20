<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Niveau;

class NiveauSeeder extends Seeder
{
    public function run()
    {
        Niveau::factory(10)->create(); // Crée 10 niveaux
    }
}

