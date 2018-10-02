<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsSizesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table products_sizes
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products_sizes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('size_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["size_id"], 'product_size_Table_31');

            $table->index(["product_id"], 'product_size_product');


            $table->foreign('size_id', 'product_size_Table_31')
                ->references('id')->on('sizes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_size_product')
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
