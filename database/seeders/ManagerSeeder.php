<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = Location::get();

        foreach ($locations as $location) {
            Manager::factory()
                ->create(['location_id' => $location->id]);
        }
    }
}
