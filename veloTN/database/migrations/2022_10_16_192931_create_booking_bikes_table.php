<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_bikes', function (Blueprint $table) {
            $table->id();
            $table->string('user_full_name');
            $table->string('email');
            $table->string('city');
            $table->integer('quantite');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('nbr_jour');
            $table->boolean('status');
            $table->unsignedBigInteger('bike_id');
            $table->foreign('bike_id')->references('id')->on('bikes');
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
        Schema::dropIfExists('booking_bikes');
    }
};
