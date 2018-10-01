<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
        
            $table->foreign('city_id', 'client_city')
                ->references('id')->on('city')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        
            $table->foreign('role_id', 'client_user_roles')
                ->references('id')->on('user_roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
        });

    
        Schema::table('city', function (Blueprint $table) {
           
            $table->foreign('country_id', 'city_country')
                ->references('id')->on('country')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


        Schema::table('product', function (Blueprint $table) {
            
            $table->foreign('state_id', 'product_product_state')
                ->references('id')->on('product_state')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

       
        Schema::table('payment_data', function (Blueprint $table) {

            $table->foreign('payment_type_id', 'payment_data_ak_1')
                ->references('id')->on('payment_type')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('product_color', function (Blueprint $table) {
            
            $table->foreign('color_id', 'product_color_Table_32')
                ->references('id')->on('colors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id', 'product_color_product')
                ->references('id')->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('product_image', function (Blueprint $table) {
            
            $table->foreign('image_id', 'product_image_images')
                ->references('id')->on('images')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id', 'product_image_product')
                ->references('id')->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('category_product', function (Blueprint $table) {
            
            $table->foreign('category_id', 'category_product_categories')
                ->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id', 'product_category_product')
                ->references('id')->on('product')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('product_size', function (Blueprint $table) {

            $table->foreign('size_id', 'product_size_Table_31')
                ->references('id')->on('sizes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_size_product')
                ->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('product_reviews', function (Blueprint $table) {

            $table->foreign('user_id', 'product_reviews_client')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_id', 'product_reviews_product')
                ->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('lookbook', function (Blueprint $table) {

            $table->foreign('user_id', 'lookbook_client')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_2_id', 'lookbook_product')
                ->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
  
        Schema::table('shipment', function (Blueprint $table) {
            
            $table->foreign('user_id', 'shipment_client')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('payment_type_id', 'shipment_payment_type')
                ->references('id')->on('payment_type')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('shipment_type_id', 'shipment_shipment_type')
                ->references('id')->on('shipment_type')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('stock', function (Blueprint $table) {
                
            $table->foreign('product_id', 'stock_product')
                ->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_color_id', 'stock_product_color')
                ->references('id')->on('product_color')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('product_size_id', 'stock_product_size')
                ->references('id')->on('product_size')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('shipment_status', function (Blueprint $table) {
            
            $table->foreign('shipment_id', 'shipment_status_shipment')
                ->references('id')->on('shipment')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('status_catalog_id', 'shipment_status_status_catalog')
                ->references('id')->on('status_catalog')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('shipment_details', function (Blueprint $table) {
           
            $table->foreign('product_id', 'shipment_details_product')
                ->references('id')->on('product')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('shipment_id', 'shipmet_details_ak_1')
                ->references('id')->on('shipment')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        Schema::table('payment_details', function (Blueprint $table) {
            
            $table->foreign('payment_data_id', 'payment_details_payment_data')
                ->references('id')->on('payment_data')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('shipment_id', 'payment_details_shipment')
                ->references('id')->on('shipment')
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
        //
    }
}
