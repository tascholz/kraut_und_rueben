<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Customer
        DB::table('customers')->insert([
            'customer_id' => 2001,
            'last_name' => 'Wellensteyn',
            'first_name' => 'Kira',
            'birthdate' => '1990-05-05',
            'street' => 'Eppendorfer Landstrasse',
            'house_number' => '104',
            'postcode' => '20249',
            'city' => 'Hamburg',
            'telephone' => '040/443322',
            'email' => 'k.wellensteyn@yahoo.de'
        ]);

        DB::table('customers')->insert([
            'customer_id' => 2002,
            'last_name' => 'Foede',
            'first_name' => 'Dorothea',
            'birthdate' => '2000-03-24',
            'street' => 'Ohmstrasse',
            'house_number' => '23',
            'postcode' => '22765',
            'city' => 'Hamburg',
            'telephone' => '040/543822',
            'email' => 'd.foede@web.de'
        ]);

        DB::table('customers')->insert([
            'customer_id' => 2003,
            'last_name' => 'Leberer',
            'first_name' => 'Sigrid',
            'birthdate' => '1989-09-21',
            'street' => 'Bilser Berg',
            'house_number' => '6',
            'postcode' => '20459',
            'city' => 'Hamburg',
            'telephone' => '0175/1234588',
            'email' => 'sigrid@leberer.de'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2004,
            'last_name' => 'Soerensen',
            'first_name' => 'Hanna',
            'birthdate' => '1974-04-03',
            'street' => 'Alter Teichweg',
            'house_number' => '95',
            'postcode' => '22049',
            'city' => 'Hamburg',
            'telephone' => '040/634578',
            'email' => 'h.soerensen@yahoo.de'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2005,
            'last_name' => 'Schnitter',
            'first_name' => 'Marten',
            'birthdate' => '1964-04-17',
            'street' => 'Stübels',
            'house_number' => '10',
            'postcode' => '22835',
            'city' => 'Barsbüttel',
            'telephone' => '0176/447587',
            'email' => 'schni_mart@gamil.com'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2006,
            'last_name' => 'Maurer',
            'first_name' => 'Belinda',
            'birthdate' => '1978-09-09',
            'street' => 'Grotelertwiete',
            'house_number' => '4a',
            'postcode' => '21075',
            'city' => 'Hamburg',
            'telephone' => '040/332189',
            'email' => 'belinda1978@zahoo.de'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2007,
            'last_name' => 'Gessert',
            'first_name' => 'Armin',
            'birthdate' => '1978-01-29',
            'street' => 'Küstersweg',
            'house_number' => '3',
            'postcode' => '21079',
            'city' => 'Hamburg',
            'telephone' => '040/67890',
            'email' => 'armin@gessert.de'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2008,
            'last_name' => 'Haessig',
            'first_name' => 'Jean-Marc',
            'birthdate' => '1982-08-30',
            'street' => 'Neugrabener Bahnhofstrasse',
            'house_number' => '30',
            'postcode' => '21149',
            'city' => 'Hamburg',
            'telephone' => '0178-67013390',
            'email' => 'jm@haessig.de'
        ]);
        DB::table('customers')->insert([
            'customer_id' => 2009,
            'last_name' => 'Urocki',
            'first_name' => 'Eric',
            'birthdate' => '1999-12-04',
            'street' => 'Elbchaussee',
            'house_number' => '228',
            'postcode' => '22605',
            'city' => 'Hamburg',
            'telephone' => '0152-96701390',
            'email' => 'urocki@outlook.de'
        ]);

        //Ingredient
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

        //Order
        DB::table('orders')->insert([
            'customer_id' => 2001,
            'order_date' => '2020-07-01',
            'total' => 6.21,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2002,
            'order_date' => '2022-07-08',
            'total' => 32.96,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2003,
            'order_date' => '2020-08-01',
            'total' => 24.08,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2004,
            'order_date' => '2020-08-02',
            'total' => 19.90,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2005,
            'order_date' => '2020-08-02',
            'total' => 6.47,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2006,
            'order_date' => '2020-08-10',
            'total' => 6.96,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2007,
            'order_date' => '2020-08-10',
            'total' => 2.41,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2008,
            'order_date' => '2020-08-10',
            'total' => 13.80,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2009,
            'order_date' => '2020-08-10',
            'total' => 8.67,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2007,
            'order_date' => '2020-08-15',
            'total' => 17.98,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2005,
            'order_date' => '2020-08-12',
            'total' => 8.67,
        ]);

        DB::table('orders')->insert([
            'customer_id' => 2003,
            'order_date' => '2020-08-13',
            'total' => 20.87,
        ]);

        //Supplier
        DB::table('suppliers')->insert([
            'supplier_id' => 101,
            'supplier_name' => 'Bio-Hof Müller',
            'street' => 'Dorfstraße',
            'house_number' => '74',
            'postcode' => '24354',
            'city' => 'Weseby',
            'telephone' => '04354-9080',
            'email' => 'mueller@biohof.de'
        ]);
        DB::table('suppliers')->insert([
            'supplier_id' => 102,
            'supplier_name' => 'Obst-Hof Altes Land',
            'street' => 'Westerjork',
            'house_number' => '74',
            'postcode' => '21635',
            'city' => 'Jork',
            'telephone' => '04162-4523',
            'email' => 'info@biohof-altesland.de'
        ]);
        DB::table('suppliers')->insert([
            'supplier_id' => 103,
            'supplier_name' => 'Molkerei Henning',
            'street' => 'Molkereiwegkunde',
            'house_number' => '13',
            'postcode' => '19217',
            'city' => 'Dechow',
            'telephone' => '038873-8976',
            'email' => 'info@molkerei-henning.de'
        ]);

        //IngredientOrder
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

        //Categories
        DB::table('categories')->insert([
            'category_id' => 1,
            'category_name' => 'Vorspeisen'
        ]);
        DB::table('categories')->insert([
            'category_id' => 2,
            'category_name' => 'Aufläufe'
        ]);
        DB::table('categories')->insert([
            'category_id' => 3,
            'category_name' => 'Nudelgerichte'
        ]);
        DB::table('categories')->insert([
            'category_id' => 4,
            'category_name' => 'Nachspeisen'
        ]);
        DB::table('categories')->insert([
            'category_id' => 5,
            'category_name' => 'Pfannengerichte'
        ]);
        DB::table('categories')->insert([
            'category_id' => 6,
            'category_name' => 'Kuchen'
        ]);
        
    }
}
