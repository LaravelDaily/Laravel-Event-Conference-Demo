<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('address')->nullable();

            $table->longText('description')->nullable();

            $table->integer('rating')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
