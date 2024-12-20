<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Absence;

class AbsenceSeeder extends Seeder
{
    public function run()
    {
        Absence::factory(30)->create(); // Crée 30 absences
    }
}

