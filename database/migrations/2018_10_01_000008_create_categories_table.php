<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
   

    /**
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create( 'categories', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('sub_category_id')->nullable()->default(null);
            $table->char('name', 255);
            $table->timestamp('timestamp');
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
