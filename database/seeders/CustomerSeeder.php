<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
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
    }
}
/* 
$table->integer('customer_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('birthdate');
            $table->string('street');
            $talbe->string('house_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('telephone');
            $table->string('email'); */