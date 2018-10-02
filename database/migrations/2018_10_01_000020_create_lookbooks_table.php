<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookbooksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
   

    /**
     * Run the migrations.
     * @table lookbooks
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create( 'lookbooks', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('user_id')->length(10)->unsigned();

            $table->index(["user_id"], 'lookbook_client');

            $table->index(["product_id"], 'lookbook_product');


            $table->foreign('user_id', 'lookbook_client')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'lookbook_product')
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
