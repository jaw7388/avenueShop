<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductColorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'product_color';

    /**
     * Run the migrations.
     * @table product_color
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->timestamp('timestamp');

            $table->index(["product_id"], 'product_color_product');

            $table->index(["color_id"], 'product_color_Table_32');

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
