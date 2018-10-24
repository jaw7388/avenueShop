<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsStatesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table products_states
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products_states', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('state', 11);
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
