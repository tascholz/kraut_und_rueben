<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            'ingredient_id' => 1001,
            'ingredient_name' => 'Zucchini',
            'unit' => 'Stück',
            'netto_price' => 0.89,
            'stock' => 100,
            'supplier_id' => 101,
            'calories' => 19,
            'carbonhydrates' => 2,
            'protein' => 1.6
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1002,
            'ingredient_name' => 'Zwiebel',
            'unit' => 'Stück',
            'netto_price' => 0.15,
            'stock' => 50,
            'supplier_id' => 101,
            'calories' => 28,
            'carbonhydrates' => 4.9,
            'protein' => 1.2
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1003,
            'ingredient_name' => 'Tomate',
            'unit' => 'Stück',
            'netto_price' => 0.45,
            'stock' => 50,
            'supplier_id' => 101,
            'calories' => 18,
            'carbonhydrates' => 2.6,
            'protein' => 1
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1004,
            'ingredient_name' => 'Schalotte',
            'unit' => 'Stück',
            'netto_price' => 0.20,
            'stock' => 500,
            'supplier_id' => 101,
            'calories' => 25,
            'carbonhydrates' => 3.3,
            'protein' => 1.5
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1005,
            'ingredient_name' => 'Karotte',
            'unit' => 'Stück',
            'netto_price' => 0.3,
            'stock' => 500,
            'supplier_id' => 101,
            'calories' => 41,
            'carbonhydrates' => 10,
            'protein' => 0.9
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1006,
            'ingredient_name' => 'Kartoffel',
            'unit' => 'Stück',
            'netto_price' => 0.15,
            'stock' => 1500,
            'supplier_id' => 101,
            'calories' => 71,
            'carbonhydrates' => 14.6,
            'protein' => 2
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1007,
            'ingredient_name' => 'Rucola',
            'unit' => 'Bund',
            'netto_price' => 0.90,
            'stock' => 10,
            'supplier_id' => 101,
            'calories' => 27,
            'carbonhydrates' => 2.1,
            'protein' => 2.6
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1008,
            'ingredient_name' => 'Lauch',
            'unit' => 'Stück',
            'netto_price' => 0.90,
            'stock' => 10,
            'supplier_id' => 101,
            'calories' => 27,
            'carbonhydrates' => 2.1,
            'protein' => 2.6
        ]);
    }
}
