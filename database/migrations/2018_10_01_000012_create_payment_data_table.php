<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDataTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
   
    /**
     * Run the migrations.
     * @table payment_data
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('payment_data', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('payment_type_id')->length(10)->unsigned();
            $table->string('data_name');
            $table->string('data_type');

            $table->unique(["payment_type_id", "data_name"], 'payment_data_ak_1');


            $table->foreign('payment_type_id', 'payment_data_ak_1')
                ->references('id')->on('payment_types')
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
