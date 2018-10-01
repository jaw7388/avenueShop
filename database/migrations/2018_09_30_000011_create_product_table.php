<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'product';

    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('product_name', 64);
            $table->integer('product_description');
            $table->string('product_little_description');
            $table->integer('product_video');
            $table->integer('product_review_id');
            $table->integer('product_price');
            $table->integer('product_specs');
            $table->integer('state_id')->unsigned();
            $table->timestamp('timestamp');

            $table->index(["state_id"], 'product_product_state');
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
