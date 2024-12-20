<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seance;

class SeanceSeeder extends Seeder
{
    public function run()
    {
        Seance::factory(20)->create(); // Crée 20 séances
    }
}

