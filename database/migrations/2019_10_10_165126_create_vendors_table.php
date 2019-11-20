<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('street');
            $table->string('near_place');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('country');
            $table->string('business_name');
            $table->string('business_work_type');
            $table->string('password');
            $table->string('vendor_photo');
            $table->string('vendor_pan_card_photo');
            $table->string('vendor_adhaar_card_front');
            $table->integer('status');
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
        Schema::dropIfExists('vendors');
    }
}
