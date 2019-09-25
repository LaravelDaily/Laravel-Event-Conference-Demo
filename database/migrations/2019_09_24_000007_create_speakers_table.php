<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->longText('description')->nullable();

            $table->string('twitter')->nullable();

            $table->string('facebook')->nullable();

            $table->string('linkedin')->nullable();

            $table->longText('full_description')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
