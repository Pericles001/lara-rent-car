<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marque' => $this->faker->company,
            'model' =>$this->faker->year,
            'type' => $this->faker->word,
            'prixJ' =>  $this->faker->randomNumber(),
            'dispo' => $this->faker->randomDigit(0, 1),

        ];
    }
}
