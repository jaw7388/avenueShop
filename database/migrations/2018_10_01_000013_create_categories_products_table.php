<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table categories_products
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('categories_products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('category_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["category_id"], 'category_product_categories');

            $table->index(["product_id"], 'product_category_product');


            $table->foreign('category_id', 'category_product_categories')
                ->references('id')->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_category_product')
                ->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
