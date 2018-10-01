<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'category_product';

    /**
     * Run the migrations.
     * @table category_product
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('category_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["category_id"], 'category_product_categories')->unsigned()->nullable();

            $table->index(["product_id"], 'product_category_product')->unsigned()->nullable();
            
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
