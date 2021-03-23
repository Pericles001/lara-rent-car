<?php

namespace Database\Factories;

use App\Models\Command;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class CommandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Command::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'car_id' =>Car::pluck('id')->random(),
            'dateL' => $this->faker->dateTime(),
            'dateR' =>  $this->faker->dateTime(),
            'prixTTC' => $this->faker->randomDigit(1000, 5000),
            
            ];
    }
}
