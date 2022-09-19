<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturer = Manufacturer::query()->find(1);
        $manufacturer->types()->createMany(
            collect([
                [
                    'name' => 'A3',
                ],
                [
                    'name' => 'A4',
                ],
                [
                    'name' => 'A5',
                ],
                [
                    'name' => 'A6',
                ],
                [
                    'name' => 'A7',
                ],
            ])
        );
        $manufacturer = Manufacturer::query()->find(2);
        $manufacturer->types()->createMany(
            collect([
                [
                    'name' => 'X3',
                ],
                [
                    'name' => 'X5',
                ],
                [
                    'name' => 'X6',
                ],
                [
                    'name' => 'X7',
                ],
            ])
        );
    }
}
