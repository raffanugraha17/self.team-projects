<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =collect();

        for ($i = 1; $i < 10; $i++){
            $data->push([
                'bank_name' => "Bnk {$i}",
                'bank_account' => $i,
                'bank_branch' => "Bnk {$i}",
            ]);
        }
    Bank::factory()->createMany($data);
    }  

}
