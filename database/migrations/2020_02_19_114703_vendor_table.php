<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VendorTable extends Migration
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
            $table->unsignedBigInteger('user_id');
            $table->string('f_name');
            $table->string('m_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('phone');
            $table->string('street');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('pin_code');
            $table->string('pan_card');
            $table->string('aadhar_front');
            $table->string('aadhar_back');
            $table->string('shop_photo');
            $table->string('business_logo')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
