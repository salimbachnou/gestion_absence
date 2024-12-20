<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Filiere;

class FiliereSeeder extends Seeder
{
    public function run()
    {
        Filiere::factory(5)->create(); // Crée 5 filières
    }
}
