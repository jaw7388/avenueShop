<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSizeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'product_size';

    /**
     * Run the migrations.
     * @table product_size
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('size_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["size_id"], 'product_size_Table_31');

            $table->index(["product_id"], 'product_size_product');
                        
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
