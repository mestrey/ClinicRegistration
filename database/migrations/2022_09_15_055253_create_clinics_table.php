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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('name');
            $table->string('inn');
            $table->string('adress');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->string('contactName');
            $table->string('contactPosition');
            $table->string('contactPhone');
            $table->string('contactEmail')->nullable();
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
        Schema::dropIfExists('clinics');
    }
};
