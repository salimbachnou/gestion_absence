<?php
namespace Database\Factories;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class FiliereFactory extends Factory
{
    protected $model = Filiere::class;

    public function definition()
    {
        return [
            'nom_filiere' => $this->faker->word,
            'annee_etude' => $this->faker->numberBetween(1, 5),
            'date_creation' => $this->faker->date,
        ];
    }
}
