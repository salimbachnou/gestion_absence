<?php
namespace Database\Factories;

use App\Models\Seance;
use App\Models\Module;
use App\Models\Groupe;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeanceFactory extends Factory
{
    protected $model = Seance::class;

    public function definition()
    {
        return [
            'date_seance' => $this->faker->dateTimeThisYear(),
            'niveau_id' => Niveau::factory(),
            'groupe_id' => Groupe::factory(),
            'module_id' => Module::factory(),
        ];
    }
}
