<?php

namespace Database\Seeders;

use App\Models\MachineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MachineType::create([
            'type' => 'ML-100-AS-400',
            'description' => fake()->words(120, true),
        ]);
        MachineType::create([
            'type' => 'MDL-10-33ER',
            'description' => fake()->words(120, true),
        ]);
        MachineType::create([
            'type' => 'RDL-250',
            'description' => fake()->words(120, true),
        ]);
        MachineType::create([
            'type' => 'MHL-GG-KL10',
            'description' => fake()->words(120, true),
        ]);
        MachineType::create([
            'type' => 'MHL3-RR-KL40',
            'description' => fake()->words(120, true),
        ]);
    }
}
