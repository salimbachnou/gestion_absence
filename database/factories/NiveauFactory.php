<?php
namespace Database\Factories;

use App\Models\Niveau;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class NiveauFactory extends Factory
{
    protected $model = Niveau::class;

    public function definition()
    {
        return [
            'nom_niveau' => $this->faker->word,
            'filiere_id' => Filiere::factory(), // Associer à une filière existante
        ];
    }
}
