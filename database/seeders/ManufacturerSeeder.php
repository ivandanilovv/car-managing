<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'AUDI',
            ],
            [
                'name' => 'BMW',
            ],
        ])->each(function ($manufacturer) {
            Manufacturer::query()->create(
                ['name' => $manufacturer['name']], $manufacturer);
        });
    }
}
