<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<20; $i++){
            DB::table("Orders")->insert(
                array(
                    'id'            => $faker->unique->randomNumber,
                    'order_ref'     => $faker->sentence(8),
                    'customer_name' => $faker->paragraph(10),
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s')
                )
            );
        }
    }
}
