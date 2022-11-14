<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscription_id')->constrained('inscriptions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('statut_id')->constrained('statuts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mode_paiement_id')->constrained('mode_paiements')->onUpdate('cascade')->onDelete('cascade');
            $table->text('piece')->nullable();
            $table->boolean('isDelete')->default(0);

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
        Schema::dropIfExists('paiements');
    }
}
