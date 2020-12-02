<?php

namespace Database\Factories;

use App\Models\piece;
use Illuminate\Database\Eloquent\Factories\Factory;

class PieceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = piece::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $min= 300;
        $max = 600;
        return [
            'name'=>$this ->faker->randomElement(['maya','leopardo','elefante']),
            'description'=>$this ->faker->sentence(),
            'price'=>$this ->faker->randomFloat(0, 300, 500) 
        ];
    }
}
