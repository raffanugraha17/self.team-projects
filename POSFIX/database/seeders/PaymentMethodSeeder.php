<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =collect();

        for ($i = 1; $i < 10; $i++){
            $data->push([
                'payment_method' => "Pyt {$i}",
            ]);
    }
    PaymentMethod::factory()->createMany($data);
}

}
