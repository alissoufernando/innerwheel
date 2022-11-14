<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->date('date_arrivee');
            $table->date('date_depart');
            $table->string('montant_total');
            $table->foreignId('individu_id')->constrained('individus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tarif_id')->constrained('tarifs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('statut_id')->constrained('statuts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('mode_arrivee_id')->constrained('tarifs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('inscriptions');
    }
}
