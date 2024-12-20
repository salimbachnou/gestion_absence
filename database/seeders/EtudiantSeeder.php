<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant;

class EtudiantSeeder extends Seeder
{
    public function run()
    {
        Etudiant::factory(50)->create(); // Crée 50 étudiants
    }
}

