<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $locations = Location::get();

        foreach ($locations as $location) {
            Master::factory()
                ->count(10)
                ->create(['location_id' => $location->id]);
        }

    }
}
