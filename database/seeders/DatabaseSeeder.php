<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            FiliereSeeder::class,
            NiveauSeeder::class,
            GroupeSeeder::class,
            ModuleSeeder::class,
            UserSeeder::class,
            EtudiantSeeder::class,
            SeanceSeeder::class,
            AbsenceSeeder::class,
        ]);
    }
}
