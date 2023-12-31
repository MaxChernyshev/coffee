<?php

namespace Database\Seeders;

use App\Models\Region;
use Database\Factories\LocationFactory;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::factory()
            ->count(5)
            ->create();

        $regions = Region::get();

        foreach ($regions as $region) {
            Location::factory()
                ->count(3)
                ->create(['region_id' => $region->id]);
        }
    }
}
