<?php
namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Niveau;
use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name, 
            'prenom' => $this->faker->name,
            'cin' => $this->faker->unique()->numerify('############'),
            'filiere_id' => Filiere::factory(),
            'niveau_id' => Niveau::factory(),
            'groupe_id' => Groupe::factory(),
        ];
    }
}
