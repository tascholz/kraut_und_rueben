<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('ingredient_id');
            $table->string('ingredient_name');
            $table->string('unit');
            $table->float('netto_price');
            $table->double('stock');
            $table->integer('supplier_id');
            $table->double('calories');
            $table->double('carbonhydrates');
            $table->double('protein');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
