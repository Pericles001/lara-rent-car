<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => 'Peri',
            'email' => 'periadjovi@admin.com',
            'tel' =>$this->faker->phoneNumber,
            'ville'=>$this->faker->city,
            'email_verified_at'=>now(),
            'password'=>Hash::make('admin'),
            'remember_token'=>$this->Str::random(10)

        ];
    }
}
