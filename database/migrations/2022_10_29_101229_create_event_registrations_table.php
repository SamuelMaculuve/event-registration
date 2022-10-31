<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('area_operation');
            $table->integer('nuit');
            $table->string('company_type');
            $table->string('province');
            $table->string('location');
            $table->string('action_time_market');
            $table->string('expectations')->nullable();;
            $table->string('lot')->nullable();;
            $table->boolean('terms_conditions')->nullable();
            $table->boolean('payment_state')->nullable();;
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
        Schema::dropIfExists('event_registrations');
    }
}
