<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    public function run(): void
    {
    $data =collect();

        for ($i = 1; $i < 10; $i++){
            $data->push([
                'shift_name' => "Shf {$i}",
                'start_shift' => "Shf {$i}",
                'end_shift' => "Shf {$i}",
            ]);
        }
    Shift::factory()->createMany($data);
    }

}
