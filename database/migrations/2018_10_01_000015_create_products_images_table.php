<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsImagesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
   

    /**
     * Run the migrations.
     * @table products_images
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create( 'products_images', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('image_id')->length(10)->unsigned();
            $table->integer('product_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["product_id"], 'product_image_product');

            $table->index(["image_id"], 'product_image_images');


            $table->foreign('image_id', 'product_image_images')
                ->references('id')->on('images')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_image_product')
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
