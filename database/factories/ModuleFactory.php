<?php
namespace Database\Factories;

use App\Models\Module;
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
        ];
    }
}
