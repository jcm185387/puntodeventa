<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('ProductName');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categorias');
            $table->float('UnitPriceSupplier');
            $table->float('UnitPriceSale');
            $table->integer('UnitsInStock');
            $table->string('Picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
