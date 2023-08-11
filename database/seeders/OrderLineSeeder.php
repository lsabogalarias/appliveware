<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OrderLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 21; $i < 210000; $i++) {
            $order = DB::table('orders')->inRandomOrder()->first(); // Obtener una orden aleatoria existente
            $product = DB::table('products')->inRandomOrder()->first(); // Obtener un producto aleatorio existente

            DB::table("order_lines")->insert(
                array(
                    'order_id'    => $order->id,
                    'product_id'  => $product->id,
                    'qty'         => $faker->numberBetween(1, 10),
                    'created_at'  => now(),
                    'updated_at'  => now(),
                )
            );
        }
    }
}
