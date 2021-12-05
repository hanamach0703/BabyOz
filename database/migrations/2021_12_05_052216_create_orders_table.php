<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->decimal('subtotal', $precision = 8, $scale = 0);
            $table->decimal('shipping', $precision = 8, $scale = 0);
            $table->decimal('total', $precision = 8, $scale = 0);
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('zipcode');
            $table->text('saysomething')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
