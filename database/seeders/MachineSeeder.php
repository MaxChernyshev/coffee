<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Machine;
use App\Models\MachineType;
use App\Models\Manager;
use App\Models\Master;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = Location::get();

        foreach ($locations as $location) {

            $masters = Master::where('location_id', $location->id)->get();

            foreach ($masters as $master) {

                Machine::factory()
                    ->count(50)
                    ->create(
                        [
                            'location_id' => $location->id,
                            'master_id' => $master->id,
                        ]
                    );
            }
        }
    }
}
