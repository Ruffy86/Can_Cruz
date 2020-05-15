<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreignId('room_id')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->date('From')->nullable();
            $table->date('To')->nullable();
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
        Schema::dropIfExists('client_room');
    }
}
