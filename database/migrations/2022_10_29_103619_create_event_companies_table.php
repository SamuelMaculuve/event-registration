<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_companies', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('cell');
            $table->string('telefone');
            $table->string('whatsapp');
            $table->string('contact_nuit');
            $table->string('logo');
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
        Schema::dropIfExists('event_companies');
    }
}
