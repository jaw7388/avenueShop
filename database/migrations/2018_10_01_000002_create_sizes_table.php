<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table sizes
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('sizes', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('size_name', 7);
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
