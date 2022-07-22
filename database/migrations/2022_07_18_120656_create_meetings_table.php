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
            $table->string('name');
            $table->string('description');
<<<<<<< HEAD
            $table->dateTime('date-start')->nullable();
            $table->dateTime('date-end')->nullable();
=======
            $table->dateTime('date-start');
            $table->datetime('date-end');
>>>>>>> c3b1aef156298e9d2d44e44ae19a4d20958e4c25
            $table->string('nb_guest');
            $table->string('type_event');
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
