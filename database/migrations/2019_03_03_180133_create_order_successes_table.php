<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderSuccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_successes', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->integer('id_cake');	
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('pickupType');
            $table->string('address')->nullable();
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
        Schema::dropIfExists('order_successes');
    }
}
