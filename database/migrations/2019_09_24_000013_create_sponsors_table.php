<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('link')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
