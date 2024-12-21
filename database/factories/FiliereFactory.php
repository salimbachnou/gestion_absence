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
            'nom_fondateur' => $this->faker->name,
            'annee_etude' => $this->faker->numberBetween(1, 5),
            'date_creation' => $this->faker->date,
            'description' => $this->faker->text,
            'date_fin' => $this->faker->date
        ];
    }
}
