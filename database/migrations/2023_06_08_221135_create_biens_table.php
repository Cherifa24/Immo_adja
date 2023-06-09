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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->integer("id_agence");
            $table->integer("id_type");
            $table->string('etat')->nullable();
            $table->string('localisation');
            $table->string('type_offre');
            $table->integer('prix_vente');
            $table->date('date_publication');
            $table->string('description');
            $table->string('galerie');
            $table->timestamps();
            $table->foreign("id_agence")->references("num_matricule")->on("agences");
            $table->foreign("id_type")->references("id")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
