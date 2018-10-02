<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentDetailsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */

    /**
     * Run the migrations.
     * @table shipment_details
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('shipment_details', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('shipment_id')->length(10)->unsigned();
            $table->decimal('quanitity', 8, 2);
            $table->decimal('price_per_unit', 8, 2);
            $table->decimal('price', 8, 2);
            $table->integer('product_id')->length(10)->unsigned();

            $table->index(["product_id"], 'shipment_details_product');

            $table->unique(["shipment_id"], 'shipmet_details_ak_1');


            $table->foreign('product_id', 'shipment_details_product')
                ->references('id')->on('products')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('shipment_id', 'shipmet_details_ak_1')
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
