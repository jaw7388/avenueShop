<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsColorsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table products_colors
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products_colors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('color_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["product_id"], 'product');

            $table->index(["color_id"], 'product_color');


            $table->foreign('color_id', 'product_color')
                ->references('id')->on('colors')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product')
                ->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
