<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 1,
            'order_id' => 1001,
            'amount' => 5,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 1,
            'order_id' => 1002,
            'amount' => 3,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 1,
            'order_id' => 1006,
            'amount' => 2,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 1,
            'order_id' => 1004,
            'amount' => 3,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 2,
            'order_id' => 9001,
            'amount' => 10,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 2,
            'order_id' => 1005,
            'amount' => 5,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 2,
            'order_id' => 1003,
            'amount' => 4,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 2,
            'order_id' => 6408,
            'amount' => 5,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 3,
            'order_id' => 6300,
            'amount' => 15,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 3,
            'order_id' => 3001,
            'amount' => 5,
        ]);
        DB::table('ingredient_order')->insert([
            'ingredient_id' => 4,
            'order_id' => 5001,
            'amount' => 7,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 4,
            'order_id' => 3003,
            'amount' => 2,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 5,
            'order_id' =>1002,
            'amount' => 4,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 5,
            'order_id' => 1004,
            'amount' => 5,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 5,
            'order_id' => 1001,
            'amount' => 5,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 7,
            'order_id' => 1009,
            'amount' => 9,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 6,
            'order_id' => 1010,
            'amount' => 5,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 8,
            'order_id' => 1012,
            'amount' => 5,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 8,
            'order_id' => 1008,
            'amount' => 7,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 9,
            'order_id' => 1007,
            'amount' => 4,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 9,
            'order_id' => 1012,
            'amount' => 5,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 10,
            'order_id' => 1011,
            'amount' => 7,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 10,
            'order_id' => 4001,
            'amount' => 7,
        ]);


        DB::table('ingredient_order')->insert([
            'ingredient_id' => 11,
            'order_id' => 5001,
            'amount' => 2,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 11,
            'order_id' => 1012,
            'amount' => 5,
        ]);

        DB::table('ingredient_order')->insert([
            'ingredient_id' => 12,
            'order_id' => 1010,
            'amount' => 15,
        ]);
    }
}
