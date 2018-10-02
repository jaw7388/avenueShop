<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table cities
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cities', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('city_name', 128);
            $table->integer('country_id') ->length(10)->unsigned();

            $table->index(["country_id"], 'city_country');


            $table->foreign('country_id', 'city_country')
                ->references('id')->on('countries')
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
