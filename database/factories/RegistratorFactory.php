<?php

namespace Database\Factories;

use App\Models\Registrator;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registrator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'code' => $this->faker->bothify('*****')
        ];
    }
}
