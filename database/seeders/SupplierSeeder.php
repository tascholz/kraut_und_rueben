<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
