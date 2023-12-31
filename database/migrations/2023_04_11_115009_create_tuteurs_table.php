<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etat_civil_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('adresse');
            $table->string('cin');
            $table->text('remarques')->nullable();
            $table->foreign('etat_civil_id')->references('id')->on('etat_civils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuteurs');
    }
};
