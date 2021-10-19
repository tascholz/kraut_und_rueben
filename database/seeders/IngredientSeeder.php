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

        DB::table('ingredients')->insert([
            'ingredient_id' => 1009,
            'ingredient_name' => 'Knoblauch',
            'unit' => 'Stück',
            'netto_price' => 0.25,
            'stock' => 250,
            'supplier_id' => 101,
            'calories' => 141,
            'carbonhydrates' => 28.4,
            'protein' => 6.1
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1010,
            'ingredient_name' => 'Basilikum',
            'unit' => 'Bund',
            'netto_price' => 1.30,
            'stock' => 10,
            'supplier_id' => 101,
            'calories' => 41,
            'carbonhydrates' => 5.1,
            'protein' => 3.1
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1011,
            'ingredient_name' => 'Süßkartoffel',
            'unit' => 'Stück',
            'netto_price' => 2.0,
            'stock' => 200,
            'supplier_id' => 101,
            'calories' => 86,
            'carbonhydrates' => 20,
            'protein' => 1.6
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 1012,
            'ingredient_name' => 'Schnittlauch',
            'unit' => 'Bund',
            'netto_price' => 0.90,
            'stock' => 10,
            'supplier_id' => 101,
            'calories' => 28,
            'carbonhydrates' => 1,
            'protein' => 3
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 2001,
            'ingredient_name' => 'Apfel',
            'unit' => 'Stück',
            'netto_price' => 1.20,
            'stock' => 750,
            'supplier_id' => 102,
            'calories' => 54,
            'carbonhydrates' => 14.4,
            'protein' => 0.3
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 3001,
            'ingredient_name' => 'Vollmilch 3.5%',
            'unit' => 'Liter',
            'netto_price' => 1.5,
            'stock' => 50,
            'supplier_id' => 103,
            'calories' => 65,
            'carbonhydrates' => 4.7,
            'protein' => 3.4
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 3002,
            'ingredient_name' => 'Mozzarella',
            'unit' => 'Packung',
            'netto_price' => 3.5,
            'stock' => 20,
            'supplier_id' => 103,
            'calories' => 241,
            'carbonhydrates' => 1,
            'protein' => 18.1
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 3003,
            'ingredient_name' => 'Butter',
            'unit' => 'Stück',
            'netto_price' => 3.0,
            'stock' => 50,
            'supplier_id' => 103,
            'calories' => 741,
            'carbonhydrates' => 0.6,
            'protein' => 0.7
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 4001,
            'ingredient_name' => 'Ei',
            'unit' => 'Stück',
            'netto_price' => 0.40,
            'stock' => 300,
            'supplier_id' => 102,
            'calories' => 137,
            'carbonhydrates' => 1.5,
            'protein' => 11.9
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 5001,
            'ingredient_name' => 'Wiener Würstchen',
            'unit' => 'Paar',
            'netto_price' => 1.8,
            'stock' => 40,
            'supplier_id' => 101,
            'calories' => 331,
            'carbonhydrates' => 1.2,
            'protein' => 9.9
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 9001,
            'ingredient_name' => 'Tofu-Würstchen',
            'unit' => 'Stück',
            'netto_price' => 1.8,
            'stock' => 20,
            'supplier_id' => 103,
            'calories' => 252,
            'carbonhydrates' => 7,
            'protein' => 17
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 6408,
            'ingredient_name' => 'Couscous',
            'unit' => 'Packung',
            'netto_price' => 1.9,
            'stock' => 15,
            'supplier_id' => 102,
            'calories' => 351,
            'carbonhydrates' => 67,
            'protein' => 12
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 7043,
            'ingredient_name' => 'Gemüsebrühe',
            'unit' => 'Würfel',
            'netto_price' => 0.20,
            'stock' => 4000,
            'supplier_id' => 101,
            'calories' => 1,
            'carbonhydrates' => 0.5,
            'protein' => 0.5
        ]);

        DB::table('ingredients')->insert([
            'ingredient_id' => 6300,
            'ingredient_name' => 'Kichererbsen',
            'unit' => 'Dose',
            'netto_price' => 1.0,
            'stock' => 400,
            'supplier_id' => 103,
            'calories' => 150,
            'carbonhydrates' => 21.2,
            'protein' => 9
        ]);


    }
}
