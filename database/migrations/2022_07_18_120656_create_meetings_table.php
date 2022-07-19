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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->varchar('name');
            $table->varchar('description');
            $table->dateTime('date-start');
            $table->datetime('date-end');
            $table->varchar('nb_guest');
            $table->varchar('type_event');
            $table->unsignedBigInteger('rooms_id');
            $table->foreign('rooms_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->tinyInteger('need_itsupport');
            $table->tinyInteger('need_media');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
};
