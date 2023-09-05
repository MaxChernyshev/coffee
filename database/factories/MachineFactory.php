<?php

namespace Database\Factories;

use App\Models\MachineType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Machine>
 */
class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $machineType = MachineType::pluck('id');

        return [
            'number' => fake()->numberBetween(100000, 999999),
            'machine_type_id' => fake()->randomElement($machineType),
        ];
    }
}
