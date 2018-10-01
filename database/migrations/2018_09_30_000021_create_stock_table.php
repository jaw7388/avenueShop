<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'stock';

    /**
     * Run the migrations.
     * @table stock
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_color_id')->length(10)->unsigned();
            $table->integer('product_size_id')->length(10)->unsigned();
            $table->integer('stock');
            $table->integer('product_id')->length(10)->unsigned();
            $table->timestamp('Timestamp');

            $table->index(["product_size_id"], 'stock_product_size');

            $table->index(["product_color_id"], 'stock_product_color');

            $table->index(["product_id"], 'stock_product');

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
