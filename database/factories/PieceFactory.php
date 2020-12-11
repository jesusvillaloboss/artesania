<?php

namespace Database\Factories;

use App\Models\piece;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
       $name = $this ->faker->randomElement(['Maya con hacha','Leopardo Negro','Elefante con colmillos']);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name ,'-'),
            'description'=>$this ->faker->sentence(),
            'price'=>$this ->faker->randomFloat(0, 300, 500) 
        ];
    }
}
