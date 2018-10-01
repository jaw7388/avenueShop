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
    public $set_schema_table = 'payment_details';

    /**
     * Run the migrations.
     * @table payment_details
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('shipment_id')->length(10)->unsigned();
            $table->integer('payment_data_id')->length(10)->unsigned();
            $table->string('value');

            $table->index(["payment_data_id"], 'payment_details_payment_data');

            $table->index(["shipment_id"], 'payment_details_shipment');
                        
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
