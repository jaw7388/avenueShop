<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductReviewsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'product_reviews';

    /**
     * Run the migrations.
     * @table product_reviews
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_id')->length(10)->unsigned();
            $table->integer('product_rate');
            $table->string('product_review');
            $table->integer('user_id')->length(10)->unsigned();
            $table->timestamp('timestamp');

            $table->index(["product_id"], 'product_reviews_product');

            $table->index(["user_id"], 'product_reviews_client');
            
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
