<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table stocks
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('stocks', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_color_id')->length(10)->unsigned();
            $table->integer('product_size_id')->length(10)->unsigned();
            $table->integer('stock');
            $table->integer('product_id')->length(10)->unsigned();
            $table->timestamp('Timestamp');

            $table->index(["product_size_id"], 'stock_product_size');

            $table->index(["product_color_id"], 'stock_product_color');

            $table->index(["product_id"], 'stock_product');


            $table->foreign('product_id', 'stock_product')
                ->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_color_id', 'stock_product_color')
                ->references('id')->on('products_colors')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_size_id', 'stock_product_size')
                ->references('id')->on('products_sizes')
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
