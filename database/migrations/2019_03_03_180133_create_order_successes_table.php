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
            $table->string('fname',20);
            $table->string('lname',20);
            $table->string('phone',15);
            $table->string('email',40)->nullable();
            $table->string('pickupType');
            $table->string('address',40)->nullable();
            $table->string('remark',80)->nullable();
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
