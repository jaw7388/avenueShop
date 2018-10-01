<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'shipment';

    /**
     * Run the migrations.
     * @table shipment
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->length(10)->unsigned();
            $table->timestamp('time_created');
            $table->integer('shipment_type_id')->length(10)->unsigned();
            $table->integer('payment_type_id')->length(10)->unsigned();
            $table->text('shipping_address');
            $table->text('billing_address');
            $table->decimal('products_price', 8, 2);
            $table->decimal('delivery_cost', 8, 2);
            $table->decimal('discount', 8, 2);
            $table->decimal('final_price', 8, 2);

            $table->index(["payment_type_id"], 'shipment_payment_type');

            $table->index(["shipment_type_id"], 'shipment_shipment_type');

            $table->index(["user_id"], 'shipment_client');
            
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
