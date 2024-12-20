<?php
namespace Database\Factories;

use App\Models\Absence;
use App\Models\Etudiant;
use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenceFactory extends Factory
{
    protected $model = Absence::class;

    public function definition()
    {
        return [
            'seance_id' => Seance::factory(),
            'etudiant_id' => Etudiant::factory(),
            'nbr_heures_total' => $this->faker->numberBetween(1, 3), // Heures d'absence réalistes
        ];
    }
}
