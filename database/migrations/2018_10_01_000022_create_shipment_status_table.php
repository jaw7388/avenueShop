<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentStatusTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    

    /**
     * Run the migrations.
     * @table shipment_status
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('shipment_status', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('shipment_id')->length(10)->unsigned();
            $table->integer('status_catalog_id')->length(10)->unsigned();
            $table->timestamp('status_time');
            $table->text('notes')->nullable()->default(null);

            $table->index(["status_catalog_id"], 'shipment_status_status_catalog');

            $table->index(["shipment_id"], 'shipment_status_shipment');


            $table->foreign('shipment_id', 'shipment_status_shipment')
                ->references('id')->on('shipments')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('status_catalog_id', 'shipment_status_status_catalog')
                ->references('id')->on('status_catalogs')
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
