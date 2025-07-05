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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom
            $table->string('surname'); // Prénom
            $table->string('lieu'); // Lieu de naissance
            $table->string('email')->unique(); // Email
            $table->enum('sexe', ['Masculin', 'Feminin']); //
           // $table->string('filiere')->nullable(); // Filière
           // $table->string('niveau')->nullable(); // Niveau
           // $table->string('frais')->nullable(); // Frais
           // $table->string('specialite')->nullable(); // Spécialité
            $table->string('photo')->nullable(); // Photo
            $table->date('date_naissance')->nullable(); // Date de naissance
            $table->string('telephone')->nullable(); // Téléphone
            $table->string('adresse')->nullable(); // Adresse
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
