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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time', $precision = 0);
            $table->time('arrival_time', $precision = 0);
            $table->string('train_code', 6);
            $table->unsignedSmallInteger('carriages_num');
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
