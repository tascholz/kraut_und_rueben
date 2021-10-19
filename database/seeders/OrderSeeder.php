<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
    }
}
