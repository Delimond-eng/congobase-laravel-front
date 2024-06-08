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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('identifiant');
            $table->string('photo')->nullable();
            $table->string('nom');
            $table->string('postnom')->nullable();
            $table->string('prenom');
            $table->string('etatcivil');
            $table->string('genre');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('adresse');
            $table->string('ville');
            $table->string('nationalite');
            $table->string('description');
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
        Schema::dropIfExists('membres');
    }
};