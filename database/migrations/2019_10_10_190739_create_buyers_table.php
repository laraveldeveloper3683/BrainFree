<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
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
            $table->string('buyer_photo');
            $table->string('buyer_pan_card_photo');
            $table->string('buyer_adhaar_card_front');
            $table->string('buyer_adhaar_card_back');
            $table->string('buyer_logo')->nullable();
            $table->string('buyer_office_photo');
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
        Schema::dropIfExists('buyers');
    }
}
