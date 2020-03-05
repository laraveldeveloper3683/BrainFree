<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGstBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gst_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('f_name');
            $table->string('gst_number')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('pin_code');
            $table->string('country');
            $table->string('mobile_brand');
            $table->string('mobile_model');
            $table->string('mobile_price');
            $table->string('gst_percentage');
            $table->string('total_gst_price');
            $table->string('mobile_color');
            $table->string('payment_mode');
            $table->string('mobile_imei');
            $table->string('mobile_imei_photo');
            $table->string('customer_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gst_bills');
    }
}
