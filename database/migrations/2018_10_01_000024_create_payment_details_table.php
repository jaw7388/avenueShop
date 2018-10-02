<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table payment_details
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('payment_details', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('shipment_id')->length(10)->unsigned();
            $table->integer('payment_data_id')->length(10)->unsigned();
            $table->string('value');

            $table->index(["payment_data_id"], 'payment_details_payment_data');

            $table->index(["shipment_id"], 'payment_details_shipment');


            $table->foreign('payment_data_id', 'payment_details_payment_data')
                ->references('id')->on('payment_data')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('shipment_id', 'payment_details_shipment')
                ->references('id')->on('shipments')
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
