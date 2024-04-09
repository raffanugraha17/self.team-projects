<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =collect();

        for ($i = 1; $i < 10; $i++){
            $data->push([
                'customer_name' => "Cst {$i}",
                'customer_telephone' => $i,
                'customer_age' => $i,
                'customer_occupation' => "Cst {$i}",
                'customer_address' => "Cst {$i}",
                'customer_gender' => "Cst {$i}",
            ]);
        }
    Customer::factory()->createMany($data);
    }  
    
}
