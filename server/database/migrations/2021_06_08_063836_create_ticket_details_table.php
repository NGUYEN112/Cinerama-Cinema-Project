<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_detail', function (Blueprint $table) {
            $table->id();
            $table->string('seats');
            $table->string('phone_number')->nullable(true);
            $table->unsignedBigInteger('user_id')->nullable(true);
            $table->unsignedBigInteger('screening_id');
            $table->unsignedBigInteger('combo_id')->nullable(true);
            $table->unsignedBigInteger('discount_id')->nullable(true);
            $table->unsignedBigInteger('film_id');
               
            $table->integer('status');
            $table->integer('ticket_price');
            $table->integer('total_price');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('screening_id')->references('id')->on('screenings');
            $table->foreign('combo_id')->references('id')->on('combos');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->foreign('film_id')->references('id')->on('films');
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
        Schema::dropIfExists('ticket_details');
    }
}
