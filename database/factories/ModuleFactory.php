<?php
namespace Database\Factories;

use App\Models\Module;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    protected $model = Module::class;

    public function definition()
    {
        return [
            'nom_module' => $this->faker->word,
            'date_creation' => $this->faker->date,
            'date_fin' => $this->faker->date,
            'description' => $this->faker->sentence,
            'nbr_heures' => $this->faker->numberBetween(1, 100),
            'id_filiere' => Filiere::factory(),
            
        ];
    }
}
