<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singleEventRegistrations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('role')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('telefone_whatsapp')->nullable();

            $table->string('social_instagram')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_website')->nullable();
            $table->string('social_tiktik')->nullable();
            $table->string('social_outra')->nullable();

            $table->string('expectations')->nullable();;
            $table->string('lot')->nullable();;
            $table->boolean('terms_conditions')->nullable();
            $table->boolean('payment_state')->nullable();
            $table->string('image_comprovation');
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
        Schema::dropIfExists('singleEventRegistrations');
    }
}
