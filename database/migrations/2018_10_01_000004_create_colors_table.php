<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table colors
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('colors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('color_name', 64);
            $table->string('code',7);
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
