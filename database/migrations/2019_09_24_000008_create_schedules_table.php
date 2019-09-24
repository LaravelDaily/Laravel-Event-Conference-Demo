<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('day_number');

            $table->time('start_time');

            $table->string('title');

            $table->string('subtitle')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
