<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoughBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rough_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('f_name')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('district');
            $table->string('pin_code');
            $table->string('country');
            $table->string('mobile_brand');
            $table->string('mobile_model');
            $table->string('mobile_color');
            $table->string('mobile_price');
            $table->string('payment_mode');
            $table->string('mobile_imei');
            $table->string('mobile_imei_photo');
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
        Schema::dropIfExists('rough_bills');
    }
}
