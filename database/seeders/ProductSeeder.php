<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            DB::table("Products")->insert(
                array(
                    'id'   => $faker->unique->randomNumber,
                    'name' => $faker->sentence(10),
                    'cost' => $faker->randomNumber(5),
                    'created_at'    => date('Y-m-d H:m:s'),
                    'updated_at'    => date('Y-m-d H:m:s')
                )
            );
        }
    }
}
