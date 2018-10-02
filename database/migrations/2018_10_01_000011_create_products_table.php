<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table products
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('product_name', 64);
            $table->string('product_description', 255);
            $table->string('product_little_description', 128);
            $table->string('product_video', 125);
            $table->decimal('product_price', 5, 2);
            $table->string('product_specs', 255);
            $table->integer('state_id')->length(10)->unsigned()->default(1);
            $table->timestamp('timestamp');

            $table->index(["state_id"], 'product_product_state');


            $table->foreign('state_id', 'product_product_state')
                ->references('id')->on('products_states')
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
