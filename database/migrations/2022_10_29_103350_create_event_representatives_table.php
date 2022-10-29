<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_representatives', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('role');
            $table->string('email');
            $table->string('cell');
            $table->string('whatsapp');
            $table->unsignedBigInteger('event_registration_id')->nullable();
            $table->foreign('event_registration_id')->references('id')->on('event_registrations')->onDelete('cascade');
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
        Schema::dropIfExists('event_representatives');
    }
}
