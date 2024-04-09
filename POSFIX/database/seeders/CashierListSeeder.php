<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CashierListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =collect();

        for ($i = 1; $i < 10; $i++){
            $data->push([
                'cashier_name' => "Csr {$i}",
                'cashier_telephone' => $i,
                'cashier_role' => $i,
                'cashier_shift' => "Csr {$i}",
                'cashier_gender' => "Csr {$i}",
            ]);
        }
        CashierList::factory()->createMany($data);  
    }
}
