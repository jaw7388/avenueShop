<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsReviewsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table products_reviews
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products_reviews', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('product_rate');
            $table->string('product_review');
            $table->integer('user_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["product_id"], 'product_reviews_product');

            $table->index(["user_id"], 'product_reviews_client');


            $table->foreign('user_id', 'product_reviews_client')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_reviews_product')
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
