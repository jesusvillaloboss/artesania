<?php

namespace Database\Factories;

use App\Models\coment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = coment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'titulo' => $this->faker->sentence(4),
           'comen'  => $this->faker->paragraph(),
           'piece_id'=>\App\Models\piece::all()->random()->id
        ];
    }
}
