<?php
namespace Database\Factories;

use App\Models\Groupe;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupeFactory extends Factory
{
    protected $model = Groupe::class;

    public function definition()
    {
        return [
            'nom_groupe' => $this->faker->word,
            'niveau_id' => Niveau::factory(), // Associer à un niveau existant
        ];
    }
}
