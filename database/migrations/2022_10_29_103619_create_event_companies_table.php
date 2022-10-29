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
            $table->string('c_email')->nullable();
            $table->string('c_cell');
            $table->string('c_telefone');
            $table->string('c_whatsapp');
            $table->string('c_contact_nuit');
            $table->string('c_logo');
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
